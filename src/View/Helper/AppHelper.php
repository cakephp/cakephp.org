<?php
namespace App\View\Helper;

use Cake\View\Helper;

class AppHelper extends Helper
{
	/**
	 * Checks the active and return active class
	 *
	 * @param string $controller
	 * @return string
	 */
	public function active($controller)
	{
		return strtolower($this->request->controller) == strtolower($controller) ? 'active' : '';
	}
}
