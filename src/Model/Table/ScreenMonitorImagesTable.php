<?php
namespace App\Model\Table;

/**
 * @property \App\Model\Table\ProjectsTable&\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ScreenMonitorImage newEmptyEntity()
 * @method \App\Model\Entity\ScreenMonitorImage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ScreenMonitorImage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Josegonzalez\Upload\Model\Behavior\UploadBehavior
 */
class ScreenMonitorImagesTable extends UploadedFilesTable
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
                'transformer' => 'App\File\Transformer\GenerateDifferentVersionsTransformer',
            ],
        ]);

        $this->belongsTo('Projects', [
            'foreignKey' => 'entity_id',
            'conditions' => ['model' => 'ScreenMonitorImages'],
        ]);
    }
}
