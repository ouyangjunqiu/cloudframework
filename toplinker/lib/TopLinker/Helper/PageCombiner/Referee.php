<?php

class TopLinker_Helper_PageCombiner_Referee
{
    /**
     * @var integer
     */
    public $totalPage;

    /**
     * @var integer
     */
    public $loadedPage;

    /**
     * @var string
     */
    private $result = null;

    /**
     * Accept request result
     */
    public function accept()
    {
        if (null === $this->result) {
            $this->result = 'accept';
        }
    }

    /**
     * Request again
     */
    public function retry()
    {
        if (null === $this->result) {
            $this->result = 'retry';
        }
    }

    /**
     * Request again
     */
    public function stop()
    {
        if (null === $this->result) {
            $this->result = 'stop';
        }
    }

    /**
     * Get referee result
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }
}
