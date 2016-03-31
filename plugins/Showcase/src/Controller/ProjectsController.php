<?php
namespace Showcase\Controller;

use Showcase\Controller\AppController;

/**
 * Projects Controller
 *
 * @property \Showcase\Model\Table\ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
	public function index()
	{
		$this->set('highlighted', $this->Projects->find('highlighted')->first());
		$this->set('projects', $this->Projects->find('showcase'));
	}

	public function view($slug)
	{
		$this->set('project', $this->Projects->where(['slug' => $slug])->firstOrFail());
	}
}
