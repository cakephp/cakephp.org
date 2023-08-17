<?php
namespace App\Controller;

use Cake\Event\Event;

/**
 * Projects Controller
 *
 * @property \Showcase\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
    /**
     * @inheritDoc
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        return parent::beforeFilter($event);
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        $this->set('highlights', $this->Projects->getHighlights('highlights'));
        $this->set('projects', $this->Projects->find('showcase'));
    }

    /**
     * @param string $slug slug
     * @return \Cake\Http\Response|null|void
     */
    public function view($slug)
    {
        $this->set('project', $this->Projects->where(['slug' => $slug])->firstOrFail());
    }
}
