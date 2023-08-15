<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class ProjectsController extends AppController
{
    /**
     * @var array
     */
    private $patchOptions = ['associated' => [
        'ScreenMonitorImages' => ['validate' => false],
        'PerspectiveImages' => ['validate' => false],
    ]];

    /**
     * @inheritDoc
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        if (in_array($this->request->action, ['edit', 'add'])) {
            $this->fetchTable('Muffin/Tags.Tags');
            $this->set('tags', $this->Tags->find('list', ['keyField' => 'label']));
        }

        return parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        $projects = $this->paginate($this->Projects);

        $this->set(compact('projects'));
        $this->viewBuilder()->setOption('serialize', ['projects']);
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['PerspectiveImages', 'ScreenMonitorImages'],
        ]);

        $this->set('project', $project);
        $this->viewBuilder()->setOption('serialize', ['project']);
    }

    /**
     * Add method
     *
     * Redirects on successful add, renders view otherwise.
     *
     * @return \Cake\Http\Response|null|void
     */
    public function add()
    {
        $project = $this->Projects->newEmptyEntity();

        if ($this->request->is('post')) {
            $this->normalizeScreenMonitorImages();

            $project = $this->Projects->patchEntity($project, $this->getRequest()->getData(), $this->patchOptions);
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('project'));
        $this->viewBuilder()->setOption('serialize', ['project']);
    }

    /**
     * Normalizes screen monitor images from multiple file input to the expected structure
     *
     * @return void
     */
    private function normalizeScreenMonitorImages()
    {
//        @todo fix this
        $data = $this->getRequest()->getData();
        if (isset($data['screen_monitor_images']['file'])) {
            $files = $data['screen_monitor_images']['file'];
//            $this->request->data['screen_monitor_images'] = [];

            foreach ($files as $f) {
//                $this->request->data['screen_monitor_images'][] = ['file' => $f];
            }
        }
    }

    /**
     * Edit method
     *
     * Redirects on successful edit, renders view otherwise.
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['PerspectiveImages', 'ScreenMonitorImages', 'Tags'],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->normalizeScreenMonitorImages();

            unset($project->perspective_image);

            $project = $this->Projects->patchEntity($project, $this->getRequest()->getData(), $this->patchOptions);

            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The project has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The project could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('project'));
        $this->viewBuilder()->setOption('serialize', ['project']);
    }

    /**
     * Delete method
     *
     * Redirects to index.
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
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
