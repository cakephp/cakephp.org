<?php
namespace App\Controller;

use Cake\Controller\ErrorController as CoreErrorController;

class ErrorController extends CoreErrorController
{
    public $helpers = [
        'AssetCompress.AssetCompress',
        'Form',
        'Html',
    ];
}
