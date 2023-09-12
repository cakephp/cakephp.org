<?php
namespace App\Model\Table;

/**
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\PerspectiveImage newEmptyEntity()
 * @method \App\Model\Entity\PerspectiveImage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PerspectiveImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerspectiveImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerspectiveImage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PerspectiveImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerspectiveImage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerspectiveImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerspectiveImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerspectiveImage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PerspectiveImage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PerspectiveImage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PerspectiveImage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Josegonzalez\Upload\Model\Behavior\UploadBehavior
 */
class PerspectiveImagesTable extends UploadedFilesTable
{
    /**
     * Initilize
     *
     * @param array $config config
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'file' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{microtime}',
            ],
        ]);

        $this->belongsTo('Projects', [
            'foreignKey' => 'entity_id',
            'conditions' => ['model' => 'PerspectiveImages'],
        ]);
    }
}
