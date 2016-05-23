<?php
namespace App\Model\Table;

use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\Filesystem\File;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Burzum\FileStorage\Model\Table\ImageStorageTable;

class AppImagesTable extends ImageStorageTable {

    /**
     * afterSave callback
     *
     * Does not call the parent to avoid that the regular file storage event listener saves the image already
     *
     * @param Event $event event
     * @param EntityInterface $entity entity
     * @param array $options options
     * @return bool
     */
    public function afterSave(Event $event, EntityInterface $entity, $options)
    {
        if ($entity->isNew()) {
            if (empty($entity->tmp_name)) {
                return true;
            }
            $file = [
                'tmp_name' => $entity->tmp_name,
            ];
            $entity->file = $file;
            $entity->filename = $entity['name'];
            $entity->filesize = $entity['size'];
            $file = new File($entity['name']);
            $entity->extension = $file->ext();
            $imageEvent = new Event('ImageStorage.afterSave', $this, [
                'storage' => $this->storageAdapter($entity['adapter']),
                'record' => $entity
            ]);
            $this->eventManager()->dispatch($imageEvent);
            $this->_cleanupImages($entity);
        }
        return true;
    }

    /**
     * Cleanup all the old images uploaded, keeping only the latest one after edit
     *
     * @param EntityInterface $entity entity
     * @return void
     */
    protected function _cleanupImages($entity)
    {
        $oldImages = $this->find()
            ->where([
                    'id !=' => $entity['id'],
                    'foreign_key' => $entity['foreign_key'],
                    'model' => $entity['model'],
                ]);
        $oldImages->each(function ($oldImage) {
                if (empty($oldImage['filename'])) {
                    $this->deleteAll([
                            'id' => $oldImage['id'],
                        ]);
                } else {
                    $this->delete($oldImage);
                }
            });
    }

}
