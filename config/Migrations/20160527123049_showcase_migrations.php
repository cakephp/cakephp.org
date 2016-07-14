<?php

use Phinx\Migration\AbstractMigration;

class ShowcaseMigrations extends AbstractMigration
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
    	if ($this->hasTable('projects')) {
    		return;
    	}

    	$this->table('projects')
            ->addColumn('title', 'string', ['limit' => 255, 'null' => false, 'default' => null])
            ->addColumn('website', 'string', ['limit' => 255, 'null' => false, 'default' => null])
            ->addColumn('slug', 'string', ['limit' => 255, 'null' => false, 'default' => null])
            ->addColumn('technologies', 'string', ['limit' => 255, 'null' => true, 'default' => null])
    		->addColumn('brief_description', 'string', ['limit' => 255, 'null' => false, 'default' => null])
    		->addColumn('description', 'text', ['null' => false, 'default' => null])
            ->addColumn('is_highlighted', 'boolean', ['default' => false])
            ->addColumn('is_showcase', 'boolean', ['default' => false])
            ->addColumn('created', 'timestamp')
            ->addColumn('modified', 'timestamp')
            ->create();

        $this->table('uploaded_files')
    		->addColumn('file', 'string', ['limit' => 255, 'null' => false, 'default' => null])
    		->addColumn('dir', 'string', ['limit' => 255, 'null' => false, 'default' => null])
    		->addColumn('size', 'string', ['limit' => 255, 'null' => false, 'default' => null])
    		->addColumn('type', 'string', ['limit' => 255, 'null' => false, 'default' => null])
    		->addColumn('created', 'timestamp')
    		->addColumn('modified', 'timestamp')
    		->create();

    	$this->table('uploaded_files')
    		->addColumn('entity_id', 'integer', ['limit' => 11, 'default' => null, 'null' => false])
    		->addColumn('model', 'string', ['limit' => 255, 'default' => null, 'null' => false])
    		->update();
    }
}
