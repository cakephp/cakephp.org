<?php
namespace App\View\Helper;

use Cake\View\Helper;

/**
 * Menu Helper
 */
class MenuHelper extends Helper
{
    public $helpers = ['Html'];

    /**
     * List of options related to community menu option
     *
     * @return array
     */
    public function communityItems()
    {
        $community = [
            'Get Involved' => [
                'url' => 'http://community.cakephp.org/get-involved',
                'options' => ['target' => '_blank']
            ],
            'Blog' => [
                'url' => '#',
            ],
            'Newsletter' => [
                'url' => ['controller' => 'Pages', 'action' => 'display', 'newsletter'],
            ],
            'Certification' => [
                'url' => 'http://certification.cakephp.org/',
                'options' => ['target' => '_blank']
            ],
            'My CakePHP' => [
                'url' => 'http://my.cakephp.org/login',
                'options' => ['target' => '_blank']
            ],
            'Cakefest' => [
                'url' => 'http://cakefest.org',
                'options' => ['target' => '_blank']
            ],
            'Oss Bounty' => [
                'url' => '#',
            ],
            'Forum' => [
                'url' => '#',
            ],
        ];

        return $community;
    }

    /**
     * List of options related to help and support menu option
     *
     * @return array
     */
    public function helpAndSupportItems()
    {
        $helpAndSupport = [
            'Issues (Github)' => [
                'url' => 'https://github.com/cakephp/cakephp/issues',
                'options' => ['target' => '_blank']
            ],
            'Youtube Channel' => [
                'url' => 'https://www.youtube.com/user/CakePHP',
                'options' => ['target' => '_blank']
            ],
            'Google Groups' => [
                'url' => 'https://plus.google.com/communities/108328920558088369819',
                'options' => ['target' => '_blank']
            ],
            'Stack Overflow' => [
                'url' => 'http://stackoverflow.com/tags/cakephp',
                'options' => ['target' => '_blank']
            ],
            'Commercial' => [
                'url' => 'http://www.cakedc.com/',
                'options' => ['target' => '_blank']
            ],
            'Irc' => [
                'url' => 'https://kiwiirc.com/client/irc.freenode.net#cakephp',
                'options' => ['target' => '_blank']
            ],
            'Slack' => [
                'url' => 'http://cakesf.herokuapp.com/',
                'options' => ['target' => '_blank']
            ],
            'Facebook' => [
                'url' => 'https://www.facebook.com/CakePHP/',
                'options' => ['target' => '_blank']
            ],
        ];
        return $helpAndSupport;
    }

    /**
     * List of options related to jobs menu option
     *
     * @return array
     */
    public function jobsItems()
    {
        return [
            'Freelance App' => '#',
            'Cake Jobs' => [
                'url' =>'http://cakephpjobs.com/',
                'options' => ['target' => '_blank']
            ],
            'Job Board' => '#',
            'Linkedin' => [
                'url' => 'https://www.linkedin.com/groups/4623165',
                'options' => ['target' => '_blank']
            ],
            'Freelancer' => '#',
            'UpWork' => '#',
        ];
    }

    /**
     * List of options related to documentation menu option
     *
     * @return array
     */
    public function documentationItems()
    {
        $documentation = [
            'Book' => 'http://book.cakephp.org/',
            'Api' => 'http://api.cakephp.org/',
            'Videos' => [
                'url' => ['controller' => 'Pages', 'action' => 'display', 'videos']
            ],
            'Privacy Policy' => [
                'url' => ['controller' => 'Pages', 'action' => 'display', 'privacy']
            ],
            'Logos & Trademarks' => [
                'url' => ['controller' => 'Pages', 'action' => 'display', 'trademark']
            ],
        ];
        return $documentation;
    }

    /**
     * List of options related to service providers menu option
     *
     * @return array
     */
    public function serviceProvidersItems()
    {
        $serviceProvider = [
            'Cakedc' => 'http://www.cakedc.com/',
            'PhpStorm' => [
                'url' => 'https://www.jetbrains.com/phpstorm/',
                'options' => ['target' => '_blank']
            ],
            'Rackspace' => [
                'url' => 'https://www.rackspace.com/',
                'options' => ['target' => '_blank']
            ]
        ];
        return $serviceProvider;
    }

    /**
     * List of options related to calendar menu option
     *
     * @return array
     */
    public function calendarItems()
    {
        $calendar = [
            'Meetups' => '#',
            'Events' => '#',
        ];
        return $calendar;
    }
}
