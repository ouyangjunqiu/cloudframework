<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$GLOBALS['counter'] = new stdClass();
$GLOBALS['counter']->count = 0;

$appKey = 0;
$secretKey = '';
$config = new TopLinker_Config($appKey, $secretKey);
$linker = new TopLinker($config);

$startTime = microtime(true);
for ($i = 0; $i < 10000; $i++) {
    if ($i % 100 == 0) {
        echo 'Requested: ' . ($i / 10000) * 100 . "%\n";
    }
    $linker->call('taobao.time.get', 'process', array());
}

$linker->finish();

function process()
{
    $GLOBALS['counter']->count++;
    if ($GLOBALS['counter']->count % 100 == 0) {
        echo 'Finished: ' . ($GLOBALS['counter']->count / 10000) * 100 . "%\n";
    }
}

echo 'Cost time: ' . (microtime(true) - $startTime) . "\nFinished Request: " . $GLOBALS['counter']->count;