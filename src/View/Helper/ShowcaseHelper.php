<?php
namespace App\View\Helper;

use Cake\View\Helper;

class ShowcaseHelper extends Helper
{
	public $helpers = ['Html'];

	/**
	 * Output a boolean value using bootstrap label
	 *
	 * @param bool $value
	 * @return string
	 */
	public function boolean($value)
	{
		$class = $value ? 'label-success' : 'label-danger';
		$content = $value ? 'Yes' : 'No';

		return $this->Html->tag('span', $content, ['class' => "label $class"]);
	}

	/**
	 * Output the image
	 *
	 * @param UploadedFile $file
	 * @param array $options
	 * @return string
	 */
	public function image($file, $options = [], $type = false)
	{
		$dir = str_replace('webroot', '', $file->dir);
		$file = $file->file;

		if ($type) {
			$arr = explode('.', $file);
			$file = $arr[0] . $type . '.' . $arr[1];
		}

		return $this->Html->image($dir . DS . $file, $options);
	}
}
