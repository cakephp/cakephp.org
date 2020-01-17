<?php

use Phinx\Migration\AbstractMigration;

class AddSuperadmin extends AbstractMigration
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
    public function up()
    {
        $users = [
            [
                'id' => '15671cc7-6225-4882-b5ca-3b16aafbc7ac',
                'username' => 'superadmin',
                'email' => 'team@cakedc.com',
                'password' => '$2y$10$Lfz5xXAtgpKr8v/42DnYUezbhU.SRJW.TpGBxZqcIg3GnZ9oTDNTK',
                'first_name' => null,
                'last_name' => null,
                'token' => null,
                'token_expires' => null,
                'api_token' => null,
                'activation_date' => null,
                'secret' => null,
                'secret_verified' => null,
                'tos_date' => null,
                'active' => '1',
                'is_superuser' => '1',
                'role' => 'superuser',
                'created' => '2016-05-23 08:21:37',
                'modified' => '2016-05-23 08:21:37',
            ],
        ];
        $usersTable = $this->table('users');
        $usersTable->insert($users)->save();
    }

    public function down()
    {
        $this->execute("DELETE FROM users WHERE id = '15671cc7-6225-4882-b5ca-3b16aafbc7ac'");
    }
}
