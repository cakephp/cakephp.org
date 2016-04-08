<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Hash;

class AppHelper extends Helper
{
    public $helpers = ['Html'];

    /**
     * Outputs the footer menu items
     *
     * @param array $items
     * @return string
     */
    public function footerMenuItems($items)
    {
        $result = '';

        foreach ($items as $title => $options) {
            $class = '';
            $icon = 'fa fa-menu fa-chevron-right';
            $url = $options;

            if (is_array($options)) {
                $icon = Hash::get($options, 'icon', $icon);
                $url = Hash::get($options, 'url', '#');
                $class = Hash::get($options, 'class', '');
            }

            $link = $this->Html->link(
                $this->Html->tag('i', '', ['class' => $icon]) . __($title),
                $url,
                ['escape' => false]
            );

            $result .= $this->Html->tag('li', $link, ['class' => $class]);
        }

        return $result;
    }
}
