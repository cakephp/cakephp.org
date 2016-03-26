<?php
namespace Showcase\View\Helper;

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
}
