<?php

use App\Controller\AppController;

class NewsController extends AppController
{
    public $uses = array('Feed');

    public function index()
    {
        $data = $this->Feed->read('BakeryNews');
        $this->set(compact('data'));
        return $data;
    }
}
