<?php
namespace App\Controller;

use Cake\Controller\ErrorController as CoreErrorController;
use Cake\Core\Configure;
use Cake\Event\Event;

class ErrorController extends CoreErrorController
{
    public $helpers = [
        'AssetCompress.AssetCompress',
        'Form',
        'Html',
    ];

    /**
     * Called after the controller action is run, but before the view is rendered. You can use this method
     * to perform logic or set view variables that are required on every request.
     *
     * @param Event $event An Event instance
     * @return void
     * @link http://book.cakephp.org/3.0/en/controllers.html#request-life-cycle-callbacks
     */
    public function beforeRender(Event $event)
    {
        $this->set([
            '_version' => Configure::read('App.version'),
        ]);
        parent::beforeRender($event);
    }
}
