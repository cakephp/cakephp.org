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
 * @property \App\Model\Table\ChangelogsTable $Changelogs
 */
class ChangelogsController extends AppController
{
    /**
     * Initialize method
     *
     * @return void
     */
    public function initialize(): void
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
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Changelogs->repository(Configure::read('Changelog.Repository'));
    }

    /**
     * Index Action
     *
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        $tags = $this->Changelogs->tags();
        $this->set(compact('tags'));
    }

    /**
     * View changelog
     *
     * Redirects on invalid tag
     *
     * @param string $tag Tag to view
     * @return \Cake\Http\Response|null|void
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
