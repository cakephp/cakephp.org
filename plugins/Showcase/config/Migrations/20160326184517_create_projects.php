<?php

use Phinx\Migration\AbstractMigration;

class CreateProjects extends AbstractMigration
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
        $this->table('projects')
            ->addColumn('title', 'string', ['limit' => 255, 'null' => false, 'default' => null])
            ->addColumn('website', 'string', ['limit' => 255, 'null' => false, 'default' => null])
            ->addColumn('is_highlighted', 'boolean', ['default' => false])
            ->addColumn('is_showcase', 'boolean', ['default' => false])
            ->addColumn('created', 'timestamp')
            ->addColumn('modified', 'timestamp')
            ->create();
    }
}
