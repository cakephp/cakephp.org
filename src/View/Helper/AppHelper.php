<?php
namespace App\View\Helper;

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\I18n\FrozenTime;
use Cake\Utility\Hash;
use Cake\View\Helper;
use DateTime;

/**
 * @property \App\View\Helper\HtmlHelper $Html
 */
class AppHelper extends Helper
{
    /**
     * Helpers
     *
     * @var array
     */
    protected $helpers = [
        'Html',
    ];

    /**
     * Adds http to the begining if not there yet
     *
     * @param string $link URL / Link.
     * @return string
     */
    public function externalLink($link)
    {
        if (!preg_match('/^(http|https)/', $link)) {
            return 'http://' . $link;
        }

        return $link;
    }

    /**
     * Outputs the footer menu items
     *
     * @param array $items Items to process.
     * @return string
     */
    public function menuItems($items)
    {
        $result = '';

        foreach ($items as $key => $options) {
            $class = '';
            $icon = 'fa fa-menu fa-chevron-right';
            $url = $options;
            $linkOptions = ['escape' => false];

            if (is_array($options)) {
                $icon = Hash::get($options, 'icon', $icon);
                $url = Hash::get($options, 'url', '#');
                $class = Hash::get($options, 'class', '');
                $title = Hash::get($options, 'title', '');

                $linkOptions = array_merge($linkOptions, Hash::get($options, 'options', []));
            } else {
                $title = $key;
            }

            $link = $this->Html->link(
                $this->Html->tag('i', '', ['class' => $icon]) . __($title),
                $url,
                $linkOptions
            );

            $result .= $this->Html->tag('li', $link, ['class' => $class]);
        }

        return $result;
    }

    /**
     * Checks the active and return active class
     *
     * @param string $controller Controller instance.
     * @return string
     */
    public function active($controller)
    {
        return strtolower($this->getView()->getRequest()->getParam('controller')) == strtolower($controller) ? 'active' : '';
    }

    /**
     * Returns if cakefest is done
     *
     * @return bool
     */
    public function isCakeFestDone()
    {
        $endDate = Configure::read('Site.cakefest.end_date');

        return (new FrozenTime($endDate)) < (new FrozenTime());
    }

    /**
     * Returns if cakefest still in future
     *
     * @return bool
     */
    public function isCakeFestInFuture()
    {
        $startDate = Configure::read('Site.cakefest.start_date');

        return (new FrozenTime($startDate)) > (new FrozenTime());
    }

    /**
     * Get days left for cakefest
     *
     * @return int
     */
    public function cakeFestDaysLeft()
    {
        $startDate = Configure::read('Site.cakefest.start_date');

        return (new FrozenTime($startDate))->diff(new FrozenTime())->days;
    }

    /**
     * CakeFestDates
     *
     * @return string
     * @throws \Exception
     */
    public function cakeFestDates()
    {
        $startDate = new DateTime(Configure::read('Site.cakefest.start_date'));
        $endDate = new DateTime(Configure::read('Site.cakefest.end_date'));

        return __('{0} to {1}', $startDate->format('M d'), $endDate->format('M d'));
    }

    /**
     * Newsletter archive
     * @return mixed
     */
    public function newsletterArchive()
    {
        return Cache::remember('newsletterArchive', function () {
            return file_get_contents('http://us9.campaign-archive1.com/generate-js/?u=f380de581acd576e7d802552a&fid=13717&show=10');
        }, 'newsletter');
    }
}
