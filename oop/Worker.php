<?php

include __DIR__ . '/Log.php';
include __DIR__ . '/File.php';

class Worker
{
    use Log, File {
        Log::log insteadOf File;
        File::log as logToFile;
    }

    public $name;
}

$worker = new Worker;
$worker->log();
$worker->logToFile();