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
    public function change()
    {
       $this->execute("INSERT INTO `users` VALUES ('15671cc7-6225-4882-b5ca-3b16aafbc7ac', 'superadmin', 'team@cakedc.com', '$2y$10\$Lfz5xXAtgpKr8v/42DnYUezbhU.SRJW.TpGBxZqcIg3GnZ9oTDNTK', null, null, null, null, null, null, null, null, null, '1', '1', 'superuser', '2016-05-23 08:21:37', '2016-05-23 08:21:37')");
    }
}
