<?php
namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * Class MetaHelper
 *
 * @package App\View\Helper
 */
class MetaHelper extends Helper
{
    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * Set twitter cards and facebook specific tags
     *
     * @param array $options Options array.
     * @return string
     */
    public function socialTags($options = [])
    {
        $socialTags = $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary']);
        $socialTags .= $this->Html->meta(['name' => 'twitter:site', 'content' => '@cakephp']);
        $socialTags .= $this->Html->meta(['name' => 'twitter:title', 'content' => $options['title']]);
        $socialTags .= $this->Html->meta(['name' => 'twitter:description', 'content' => $options['description']]);
        $socialTags .= $this->Html->meta(['property' => 'og:type', 'content' => 'profile']);
        $socialTags .= $this->Html->meta(['property' => 'og:title', 'content' => $options['title']]);
        $socialTags .= $this->Html->meta(['property' => 'og:description', 'content' => $options['description']]);
        $socialTags .= $this->Html->meta(['property' => 'og:site_name', 'content' => 'CakePHP - The rapid development php framework.']);

        return $socialTags;
    }
}
