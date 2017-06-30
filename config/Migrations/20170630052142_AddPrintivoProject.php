<?php
use Cake\Chronos\Chronos;
use Cake\ORM\TableRegistry;
use Migrations\AbstractMigration;

class AddPrintivoProject extends AbstractMigration
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
        $projectTable= TableRegistry::get('Projects');
        $perspectiveImagesTable= TableRegistry::get('PerspectiveImages');
        $screenMonitorImagesTable= TableRegistry::get('ScreenMonitorImages');
        $uploadedFilesTable= TableRegistry::get('UploadedFiles');

        $project = $projectTable->newEntity();
        $project->title = 'Printivo.com';
        $project->slug = 'printivo-com';
        $project->website = 'https://printivo.com';
        $project->brief_description = 'Nigeria\'s first and arguably Africa\'s largest online web-print platform';
        $project->description = '<p><strong>Nigeria&#39;s</strong> first and arguably Africa&#39;s largest online web-print platform enabling individuals and SMEs order their print products such as business cards, fliers, banners, flyers and mugs.</p>
                <p>They use <strong>CakePHP</strong> for their front facing site and their internal order management systems. First versions were built in 2014 using version 2.4.7 with constant updates leading up to migrating to version 3 in 2017</p>';
        $project->technologies = 'CakePHP';
        $project->is_showcase = 1;
        $project->is_highlighted = 1;
        $project->created = Chronos::now();
        $project->modified = Chronos::now();


        if($projectTable->save($project)) {
            $perspectiveImages = $uploadedFilesTable->newEntity();
            $perspectiveImages->file = 'Perspective_Printivo.jpg';
            $perspectiveImages->dir = 'https://s3-us-west-2.amazonaws.com/printivo/files/cakephp/PerspectiveImages';
            $perspectiveImages->size = '163374';
            $perspectiveImages->type = 'image/jpeg';
            $perspectiveImages->entity_id = $project->id;
            $perspectiveImages->created = Chronos::now();
            $perspectiveImages->modified = Chronos::now();
            $uploadedFilesTable->save($perspectiveImages);

            $perspectiveImages->model = $perspectiveImagesTable->alias();
            $perspectiveImagesTable->save($perspectiveImages);

            $screenMonitorImages = $uploadedFilesTable->newEntity();
            $screenMonitorImages->file = 'printivo.jpg';
            $screenMonitorImages->dir = 'https://s3-us-west-2.amazonaws.com/printivo/files/cakephp/ScreenMonitorImages';
            $screenMonitorImages->size = '150539';
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
