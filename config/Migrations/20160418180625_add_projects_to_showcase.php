<?php

use Phinx\Migration\AbstractMigration;

class AddProjectsToShowcase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
    	$this->execute('DELETE FROM projects');
    	$this->execute('DELETE FROM tags_tags');
    	$this->execute('DELETE FROM tags_tagged');
    	$this->execute('DELETE FROM uploaded_files');
    	$this->execute('ALTER TABLE projects AUTO_INCREMENT = 1');

    	$this->table('projects')
    		->insert($this->projects)
    		->save();

    	foreach ($this->projects as $i => $project) {
    		$this->projectId = $i+1;

    		$this->assignId();

    		$this->table('uploaded_files')
    			->insert($this->screenMonitorImages)
    			->insert($this->perspectiveImages)
    			->save();
    	}
    }

    private function assignId()
    {
    	foreach ($this->screenMonitorImages as $i => &$image) {
    		$image['entity_id'] = $this->projectId;
    	}

    	foreach ($this->perspectiveImages as $i => &$image) {
    		$image['entity_id'] = $this->projectId;
    	}
    }

    public $screenMonitorImages = [
    	[
    		'file' => 'screen_01.jpg',
    		'dir' => 'img/migrated_showcase',
    		'entity_id' => null,
    		'model' => 'ScreenMonitorImages'
    	],
    	[
    		'file' => 'screen_02.jpg',
    		'dir' => 'img/migrated_showcase',
    		'entity_id' => null,
    		'model' => 'ScreenMonitorImages'
    	]
    ];

    public $perspectiveImages = [
    	[
    		'file' => 'perspective_01.jpg',
    		'dir' => 'img/migrated_showcase',
    		'entity_id' => null,
    		'model' => 'PerspectiveImages'
    	]
    ];

    public $projects = [
    	[
    		'title' => 'Blendtec',
    		'website' => 'http://blendtec.com',
    		'brief_description' => 'Consultancy, Development',
    		'description' => 'We provide expert <strong>CakePHP</strong> development, consultancy and training for <b>Blendtec&reg;</b>, and were responsible for delivering a full redesign and reimagining of their main public facing website.',
    		'slug' => 'blentec',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Sainsbury\'s Bank',
    		'website' => 'http://sainsburysbank.co.uk',
    		'brief_description' => 'Consultancy, Code Review',
    		'description' => 'We helped scale and optimize the performance of their <strong>CakePHP</strong> application which interfaced with multiple web services to provide on-demand quotations for travel insurance.',
    		'slug' => 'sainsburys-bank',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Videoo',
    		'website' => 'http://videoo.com/',
    		'brief_description' => 'Consultancy, Development',
    		'description' => 'We worked closely with the <b>Videoo&trade;</b> team to create a powerful API which powers their mobile video app for both iPhone and Android. We also collaborated on the development of their web-based interface.',
    		'slug' => 'videoo',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'BMW',
    		'website' => 'http://parkncw.net',
    		'brief_description' => 'Development, API Design',
    		'description' => 'We helped deliver a custom, on-demand API for their North American market searching for locations across the US.',
    		'slug' => 'bmw',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Debtor Daddy',
    		'website' => 'http://debtordaddy.com',
    		'brief_description' => 'Consultancy, Code Review',
    		'description' => 'We provided expert <strong>CakePHP</strong> consultancy services to <b>Debtor Daddy&trade;</b>, helping them scale their existing code base and expand their market reach.',
    		'slug' => 'debtor-daddy',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'My CakePHP',
    		'website' => 'http://my.cakephp.org',
    		'brief_description' => 'Development, Support',
    		'description' => 'We built <b>My CakePHP</b> as a central location for developers to create a public <strong>CakePHP</strong> profile, and also unify the user experience across the suite of <strong>CakePHP</strong> websites.',
    		'slug' => 'my-cakephp',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Diesel\'s The Cult',
    		'website' => 'http://cult.diesel.com',
    		'brief_description' => 'Development, Design',
    		'description' => 'This <strong>CakePHP</strong> based platform allows users to alter the site\'s landscape with minimal effort. It\'s virtually self-maintained and requires minimal administrative interference for site content and media.',
    		'slug' => 'diesels-the-cult',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Adam Block Design',
    		'website' => 'http://adamblockdesign.com',
    		'brief_description' => 'Development, Support',
    		'description' => 'We provided <b>Adam Block Design</b>&reg; with ongoing technical support for their custom built <strong>CakePHP</strong> order management system, as well as building out additional modules and functionality.',
    		'slug' => 'adam-block-design',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Six Dinners Later',
    		'website' => 'http://sixdinnerslater.com',
    		'brief_description' => 'Development, Support',
    		'description' => 'We provide expert <strong>CakePHP</strong> consultancy and development services from our <b>UK</b> branch for this uniquely original social network.',
    		'slug' => 'six-dinners-later',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Internet Marketing Ninjas',
    		'website' => 'http://internetmarketingninjas.com',
    		'brief_description' => 'Consultancy, Development',
    		'description' => 'We provided <b>IMN</b> with expert <strong>CakePHP</strong> consultancy for their professional suite of online marketing and management tools, and helped them develop their central hub for users of their specialist tools.',
    		'slug' => 'internet-marketing-ninjas',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Axia Payments',
    		'website' => 'http://axiapayments.com',
    		'brief_description' => 'Development, Design',
    		'description' => 'We worked with <b>Axia</b>&reg; on building their lead management tool with <strong>CakePHP</strong>, which is designed to work seamlessly on the desktop, as well as smartphones and tablets.',
    		'slug' => 'axia-payments',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'GORigger',
    		'website' => 'http://axiapayments.com',
    		'brief_description' => 'Consultancy, Development',
    		'description' => 'We collaborated with <b>GORigger</b> to help develop and release the new version of their enterprise e-commerce platform for the oil industry and associated markets.',
    		'slug' => 'gorigger',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Ambling Books',
    		'website' => 'http://amblingbooks.com',
    		'brief_description' => 'Development, Support',
    		'description' => 'Download and listen on your Android&trade;, iPhone&trade;, iPad&trade;, or iPod&trade; Touch. Try out the free audiobooks and the free player, and experience a better way to listen to audio books.',
    		'slug' => 'ambling-books',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Care Team Connect',
    		'website' => 'http://www.advisory.com/technology/crimson-care-management',
    		'brief_description' => 'Development, Support',
    		'description' => 'Working directly with <b>Care Team Connect</b>&trade; and their product and development teams, we provide expert <strong>CakePHP</strong> development and support for their flagship product.',
    		'slug' => 'care-team-connect',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'World Architects',
    		'website' => 'http://world-architects.com',
    		'brief_description' => 'Development, Support',
    		'description' => 'In a role of technical support, we have been working with Zurich based <b>PSA Publishers</b> to help them get their <strong>CakePHP</strong> platform to reach it\'s full potential and complete their technical objectives.',
    		'slug' => 'world-architects',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Child Care Daily App',
    		'website' => 'http://childcaredailyapp.com',
    		'brief_description' => 'Development, Support',
    		'description' => 'We worked to help release the Android version of the <b>Child Care Daily App</b>, which is built upon the <strong>CakePHP</strong> framework.',
    		'slug' => 'child-care-daily-app',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    	[
    		'title' => 'Parking.io',
    		'website' => 'http://parking.io',
    		'brief_description' => 'Development, Support',
    		'description' => 'We helped refactored and save an existing code base for <b>Parking.io&trade;</b>, helping them reach their milestones and product release.',
    		'slug' => 'parkingio',
    		'is_showcase' => true,
    		'is_highlighted' => true
    	],
    ];
}
