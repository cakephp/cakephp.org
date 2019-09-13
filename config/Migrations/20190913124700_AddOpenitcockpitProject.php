<?php
use Migrations\AbstractMigration;

class AddOpenitcockpitProject extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $projectTable = TableRegistry::get('Projects');
        $perspectiveImagesTable = TableRegistry::get('PerspectiveImages');
        $screenMonitorImagesTable = TableRegistry::get('ScreenMonitorImages');
        $uploadedFilesTable = TableRegistry::get('UploadedFiles');

        $project = $projectTable->newEntity();
        $project->title = 'openITCOCKPIT';
        $project->slug = 'openitcockpit';
        $project->website = 'https://openitcockpit.io/';
        $project->brief_description = 'Open source monitoring system';
        $project->description = '<p>From large data centers to critical IT services &ndash; monitor and manage all of your servers, applications and systems at a glance!</p><p><strong>CakePHP</strong> powers the backend of <strong>openITCOCKPIT</strong>.</p>';
        $project->technologies = 'CakePHP';
        $project->is_showcase = 1;
        $project->is_highlighted = 1;
        $project->created = Chronos::now();
        $project->modified = Chronos::now();

        if ($projectTable->save($project)) {
            $perspectiveImages = $uploadedFilesTable->newEntity();
            $perspectiveImages->file = 'openitcockpit.jpg';
            $perspectiveImages->dir = 'webroot/files/PerspectiveImages/file/1568370301.6466';
            $perspectiveImages->size = '752064';
            $perspectiveImages->type = 'image/jpeg';
            $perspectiveImages->entity_id = $project->id;
            $perspectiveImages->created = Chronos::now();
            $perspectiveImages->modified = Chronos::now();
            $uploadedFilesTable->save($perspectiveImages);

            $perspectiveImages->model = $perspectiveImagesTable->alias();
            $perspectiveImagesTable->save($perspectiveImages);

            $screenMonitorImages = $uploadedFilesTable->newEntity();
            $screenMonitorImages->file = 'openitcockpit.jpg';
            $screenMonitorImages->dir = 'webroot/files/ScreenMonitorImages/file/1568370301.6522';
            $screenMonitorImages->size = '164526';
            $screenMonitorImages->type = 'image/jpeg';
            $screenMonitorImages->entity_id = $project->id;
            $screenMonitorImages->created = Chronos::now();
            $screenMonitorImages->modified = Chronos::now();
            $uploadedFilesTable->save($screenMonitorImages);

            $screenMonitorImages->model = $screenMonitorImagesTable->alias();
            $screenMonitorImagesTable->save($screenMonitorImages);
        }
    }
}
