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
     * Before Filter
     *
     * @param \Cake\Event\Event $event The event object.
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Changelogs->repository(Configure::read('Changelog.Repository'));
    }

    /**
     * Index Action
     *
     * @return array List of tags
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
     * @return void
     */
    public function view($tag = null)
    {
        if (!$tag || !in_array($tag, $this->Changelogs->tags())) {
            $this->Session->setFlash(__('Invalid tag for changelogs'));
            $this->setAction('index');
            return;
        }
        $tags = $this->Changelogs->tags();
        $changes = $this->Changelogs->changes($tag);
        $this->set(compact('tag', 'tags', 'changes'));
    }
}
