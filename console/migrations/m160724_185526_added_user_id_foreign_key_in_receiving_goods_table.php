<?php

use yii\db\Migration;

class m160724_185526_added_user_id_foreign_key_in_receiving_goods_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_receiving_goods_user1', '{{%receiving_goods}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_receiving_goods_user1', '{{%receiving_goods}}');
    }
}