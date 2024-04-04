<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddScienceOperationCentersProject extends AbstractMigration
{
    /**
     * up method.
     *
     * @return void
     */
    public function up()
    {
        $this->table('projects')->insert([
            'title' => 'Science Operation Centers',
            'website' => 'https://cusp.space.swri.edu',
            'slug' => 'cusp-space',
            'technologies' => '',
            'brief_description' => "CakePHP enables Southwest Research Institute's SODAS team to create modular, full-stack, interactive web-apps",
            'description' => "<p><strong>CakePHP</strong> enables Southwest Research Institute's SODAS team to create modular, full-stack, interactive web-apps so the scientists and engineers working on over 50+ spacecraft and instruments can see the data most relevant to them, on demand.</p>",
            'is_highlighted' => 1,
            'is_showcase' => 1,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ])->save();

        $result = $this->fetchRow("SELECT id FROM projects WHERE title like 'Science Operation Centers'");

        $this->table('uploaded_files')->insert([
            'file' => 'science-operation-centers.png',
            'dir' => 'webroot/files/PerspectiveImages/file/1712164462.6238',
            'size' => '1444462',
            'type' => 'image/png',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'entity_id' => $result['id'],
            'model' => 'PerspectiveImages',
        ])->save();
        $this->table('uploaded_files')->insert([
            'file' => 'science-operation-centers.png',
            'dir' => 'webroot/files/ScreenMonitorImages/file/1712164462.6351',
            'size' => '1444462',
            'type' => 'image/png',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'entity_id' => $result['id'],
            'model' => 'ScreenMonitorImages',
        ])->save();
    }

    /**
     * down method.
     *
     * @return void
     */
    public function down()
    {
        $this->query("DELETE FROM uploaded_files WHERE file like 'science-operation-centers.png'");
        $this->query("DELETE FROM projects WHERE title like 'Science Operation Centers'");
    }
}
