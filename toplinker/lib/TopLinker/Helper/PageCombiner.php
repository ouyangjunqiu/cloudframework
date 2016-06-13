<?php

class TopLinker_Helper_PageCombiner
{
    /**
     * @var string
     */
    public $pageKey = 'page_no';

    /**
     * @var string
     */
    public $pageSizeKey = 'page_size';

    /**
     * @var string
     */
    public $totalItemPath = '*.total_item';

    /**
     * @var string
     */
    public $firstDataPage = 1;

    /**
     * @var TopLinker
     */
    private $linker;

    /**
     * @var callable
     */
    private $callback;

    /**
     * @var string
     */
    private $session;

    /**
     * @var TopLinker_Helper_PageCombiner_Handler|null
     */
    private $handler = null;

    /**
     * @var int
     */
    private $totalPage;

    /**
     * @var array[]
     */
    private $pages;

    /**
     * @var boolean
     */
    private $finished = false;

    /**
     * @param TopLinker $linker
     * @param callable $callback
     * @param array $params
     */
    public function __construct(TopLinker $linker, $callback, $session = null)
    {
        $this->linker = $linker;
        $this->callback = $callback;
        $this->session = $session;
    }

    /**
     * @param TopLinker_Helper_PageCombiner_Handler $handler
     */
    public function setHandler(TopLinker_Helper_PageCombiner_Handler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     */
    public function process(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        if ($this->finished) {
            return;
        }

        $params = $request->getParams();

        if (null !== $this->handler) {
            $referee = new TopLinker_Helper_PageCombiner_Referee;
            $referee->totalPage = $this->totalPage;
            $referee->loadedPage = count($this->pages);
            $this->handler->handle($referee, $request, $response);
            $result = $referee->getResult();
            if (null === $result) {
                throw new Exception('Referee result not decide');
            }
            switch ($result) {
                case 'stop':
                    $this->finished = true;
                    call_user_func($this->callback, $this->pages);
                    return;
                case 'retry':
                    $this->call($request, $params);
                    return;
                case 'accept':
                default;
            }
        }

        $this->setTotalPage($request, $response);
        $page = $params[$this->pageKey];
        $this->pages[$page] = $response->getData();
        if (count($this->pages) == $this->totalPage) {
            $this->finished = true;
            call_user_func($this->callback, $this->pages,$request);
        }
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     * @return mixed
     */
    private function setTotalPage(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        $params = $request->getParams();
        $totalItem = $this->getPathValue($this->totalItemPath, $response->getData());
        if (null !== $totalItem && null === $this->totalPage) {
            $totalPage = ceil($totalItem / $params[$this->pageSizeKey]);
            $this->totalPage = $totalPage;
            for ($i = $this->firstDataPage; $i <= $totalPage; $i++) {
                $params[$this->pageKey] = $i;
                $this->call($request, $params);
            }
        }
    }

    /**
     * @param string $path
     * @param array $data
     * @return int|null
     */
    private function getPathValue($path, $data)
    {
        $tree = explode('.', $path);
        do {
            $key = array_shift($tree);
            if ('*' === $key) {
                if (!is_array($data) && !$data instanceof Iterator) {
                    break;
                }
                $data = pos($data);
            } else {
                if (!isset($data[$key])) {
                    break;
                }
                $data = $data[$key];
            }
        } while (!empty($tree));
        if (empty($tree)) {
            return $data;
        } else {
            return null;
        }
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param $params
     */
    private function call(TopLinker_Request_Abstract $request, $params)
    {
        $method = $request->getMethod();
        $this->linker->call($method, array($this, 'process'), $params, $this->session);
    }
}
