<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\EventInterface;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Response;

class ProjectsController extends AppController
{
    private $patchOptions = ['associated' => [
        'ScreenMonitorImages' => ['validate' => false],
        'PerspectiveImages' => ['validate' => false],
    ]];

    public function beforeFilter(EventInterface $event)
    {
        if (in_array($this->getRequest()->getParam('action'), ['edit', 'add'])) {
            $this->loadModel('Muffin/Tags.Tags');
            $this->set('tags', $this->Tags->find('list', ['keyField' => 'label']));
        }

        return parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return Response|null
     */
    public function index()
    {
        $projects = $this->paginate($this->Projects);

        $this->set(compact('projects'));
        $this->set('_serialize', ['projects']);
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return Response|null
     * @throws RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['PerspectiveImages', 'ScreenMonitorImages'],
        ]);

        $this->set('project', $project);
        $this->set('_serialize', ['project']);
    }

    /**
     * Add method
     *
     * @return Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $project = $this->Projects->newEmptyEntity();

        if ($this->request->is('post')) {
            $this->normalizeScreenMonitorImages();

            $project = $this->Projects->patchEntity($project, $this->request->getData(), $this->patchOptions);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('project'));
        $this->set('_serialize', ['project']);
    }

    /**
     * Normalizes screen monitor images from multiple file input to the expected structure
     *
     * @return void
     */
    private function normalizeScreenMonitorImages()
    {
        //@todo fix this
        if ($files = $this->request->getData('screen_monitor_images.file')) {
            $this->request->data['screen_monitor_images'] = [];

            foreach ($files as $f) {
                $this->request->data['screen_monitor_images'][] = ['file' => $f];
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return Response|void Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['PerspectiveImages', 'ScreenMonitorImages', 'Tags'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->normalizeScreenMonitorImages();

            unset($project->perspective_image);

            $project = $this->Projects->patchEntity($project, $this->request->getData(), $this->patchOptions);

            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('project'));
        $this->set('_serialize', ['project']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return Response|null Redirects to index.
     * @throws RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The project has been deleted.'));
        } else {
            $this->Flash->error(__('The project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
