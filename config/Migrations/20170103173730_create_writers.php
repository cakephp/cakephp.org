<?php
use Migrations\AbstractMigration;

class CreateWriters extends AbstractMigration
{

    public function up()
    {
        $this->table('writers')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('article_titles', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('writing_sample', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('extra_information', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('client_ip', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('writers');
    }
}

