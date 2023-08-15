<?php
namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * Menu Helper
 */
class MenuHelper extends Helper
{
    protected $helpers = ['Html'];

    /**
     * List of options related to community menu option
     *
     * @return array
     */
    public function communityItems()
    {
        return Configure::read('Site.menu.items.community');
    }

    /**
     * List of options related to help and support menu option
     *
     * @return array
     */
    public function helpAndSupportItems()
    {
        return Configure::read('Site.menu.items.help');
    }

    /**
     * List of options related to jobs menu option
     *
     * @return array
     */
    public function jobsItems()
    {
        return Configure::read('Site.menu.items.jobs');
    }

    /**
     * List of options related to documentation menu option
     *
     * @return array
     */
    public function documentationItems()
    {
        return Configure::read('Site.menu.items.documentation');
    }

    /**
     * List of options related to service providers menu option
     *
     * @return array
     */
    public function serviceProvidersItems()
    {
        return Configure::read('Site.menu.items.serviceProvider');
    }

    /**
     * List of options related to calendar menu option
     *
     * @return array
     */
    public function calendarItems()
    {
        return Configure::read('Site.menu.items.calendar');
    }
}
