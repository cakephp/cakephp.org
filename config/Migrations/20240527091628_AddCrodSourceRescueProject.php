<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddCrodSourceRescueProject extends AbstractMigration
{
    /**
     * up method.
     *
     * @return void
     */
    public function up()
    {
        $this->table('projects')->insert([
            'title' => 'CrowdSource Rescue',
            'website' => 'https://crowdsourcerescue.com/',
            'slug' => 'crowdsource-rescue',
            'technologies' => '',
            'brief_description' => "CrowdSource Rescue is a Texas based disaster response non-profit that has helped rescue over 60,000 victims of natural disasters",
            'description' => "<p><strong>CrowdSource Rescue</strong> is a Texas based disaster response non-profit that has helped rescue over 60,000 victims of natural disasters by connecting them to nearby volunteers and first responders.</p>
                <p>It utilizes <strong>CakePHP</strong> to build fast, support high-traffic applications, and trusts <strong>Cake's framework</strong> during literal life-and-death situations.</p>",
            'is_highlighted' => 1,
            'is_showcase' => 1,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
        ])->save();

        $result = $this->fetchRow("SELECT id FROM projects WHERE title like 'CrowdSource Rescue'");

        $this->table('uploaded_files')->insert([
            'file' => 'crowdsource-rescue.png',
            'dir' => 'webroot/files/PerspectiveImages/file/1716802210.2311',
            'size' => '91539',
            'type' => 'image/png',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'entity_id' => $result['id'],
            'model' => 'PerspectiveImages',
        ])->save();
        $this->table('uploaded_files')->insert([
            'file' => 'crowdsource-rescue.png',
            'dir' => 'webroot/files/ScreenMonitorImages/file/1716802210.2389',
            'size' => '91539',
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
        $this->query("DELETE FROM uploaded_files WHERE file like 'crowdsource-rescue.png'");
        $this->query("DELETE FROM projects WHERE title like 'CrowdSource Rescue'");
    }
}
