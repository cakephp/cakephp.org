<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddPgeDigitalProject extends AbstractMigration
{
    /**
     * up method.
     *
     * @return void
     */
    public function up()
    {
        $this->table('projects')->insert([
            'title' => 'PGE Digital',
            'website' => 'https://pge.rj.gov.br',
            'slug' => 'pge-digital',
            'technologies' => '',
            'brief_description' => 'PGE Digital is a complete solution for Brazilian Public Advocacy developed by PGE-RJ',
            'description' => '<p><strong>PGE Digital</strong> is a complete solution for Brazilian Public Advocacy developed by PGE-RJ.</p> <p>It provides all the necessary resources for Attorneys to act: from receiving subpoenas to managing deadlines and filing petitions.</p>',
            'is_highlighted' => 1,
            'is_showcase' => 1,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ])->save();

        $result = $this->fetchRow("SELECT id FROM projects WHERE title like 'PGE Digital'");
        $result['id'];

        $this->table('uploaded_files')->insert([
            'file' => 'pge-digital.png',
            'dir' => 'webroot/files/PerspectiveImages/file/1700846962.8208',
            'size' => '183957',
            'type' => 'image/png',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'entity_id' => $result['id'],
            'model' => 'PerspectiveImages',
        ])->save();
        $this->table('uploaded_files')->insert([
            'file' => 'pge-digital.png',
            'dir' => 'webroot/files/ScreenMonitorImages/file/1700846962.8224',
            'size' => '183957',
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
        $this->query("DELETE FROM uploaded_files WHERE file like 'pge-digital.png'");
        $this->query("DELETE FROM projects WHERE title like 'PGE Digital'");
    }
}
