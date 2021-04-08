<?php

use Burzum\FileStorage\Event\ImageProcessingListener;
use Burzum\FileStorage\Event\LocalFileStorageListener;
use Burzum\FileStorage\Lib\FileStorageUtils;
use Burzum\FileStorage\Lib\StorageManager;
use Cake\Event\EventManager;

$listener = new LocalFileStorageListener();
EventManager::instance()->on($listener);

$listener = new ImageProcessingListener();
EventManager::instance()->on($listener);

StorageManager::config('Local', [
    'adapterOptions' => [ROOT . DS . 'files', true],
    'adapterClass' => '\Gaufrette\Adapter\Local',
    'class' => '\Gaufrette\Filesystem',
]);
