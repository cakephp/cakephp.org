<?php
namespace App\Model\Table;

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
