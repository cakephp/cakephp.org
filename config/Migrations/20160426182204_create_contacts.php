<?php

use Phinx\Migration\AbstractMigration;

class CreateContacts extends AbstractMigration
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
    	$this->table('contacts')
    		->addColumn('subject', 'string', ['limit' => 255, 'default' => null, 'null' => false])
    		->addColumn('name', 'string', ['limit' => 255, 'default' => null, 'null' => false])
    		->addColumn('email', 'string', ['limit' => 255, 'default' => null, 'null' => false])
    		->addColumn('body', 'text', ['default' => null, 'null' => false])
    		->addColumn('created', 'timestamp', ['default' => null, 'null' => true])
    		->addColumn('modified', 'timestamp', ['default' => null, 'null' => true])
    		->create();
    }
}
