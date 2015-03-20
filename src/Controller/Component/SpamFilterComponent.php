<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class SpamFilterComponent extends Component
{

    public $key = 'Other';

    public $fields = ['name', 'body'];

    /**
     * Called after the controller's beforeFilter method, and before the
     * controller action is called.
     *
     * @param \Cake\Controller\Controller $controller The current controller.
     * @return void
     */
    public function startup(&$controller)
    {
        if (!empty($controller->data[$this->key])) {
            foreach ($this->fields as $field) {
                if (!empty($controller->data[$this->key][$field])) {
                    $controller->redirect($controller->referer());
                }
            }
        }
    }
}
