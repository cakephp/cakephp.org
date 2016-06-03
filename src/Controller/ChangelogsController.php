<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * Changelogs Controller
 *
 * @package app
 * @subpackage app.controllers
 */
class ChangelogsController extends AppController
{

    /**
     * Initialize method
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
    }

    /**
     * Before Filter
     *
     * @param \Cake\Event\Event $event The event object.
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
        $this->Changelogs->repository(Configure::read('Changelog.Repository'));
    }

    /**
     * Index Action
     *
     * @return void
     */
    public function index()
    {
        $tags = $this->Changelogs->tags();
        $this->set(compact('tags'));
    }

    /**
     * View changelog
     *
     * @param string $tag Tag to view
     * @return void|\Cake\Network\Response Redirects on invalid tag
     */
    public function view($tag = null)
    {
        if (!$tag || !in_array($tag, $this->Changelogs->tags())) {
            $this->Flash->error(__('Invalid tag for changelogs'));
            return $this->redirect(['action' => 'index']);
        }
        $tags = $this->Changelogs->tags();
        $changes = $this->Changelogs->changes($tag);
        $this->set(compact('tag', 'tags', 'changes'));
    }
}
