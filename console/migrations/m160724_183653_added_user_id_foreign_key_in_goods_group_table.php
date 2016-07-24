<?php

use yii\db\Migration;

class m160724_183653_added_user_id_foreign_key_in_goods_group_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_goods_group_user1', '{{%goods_group}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_goods_group_user1', '{{%goods_group}}');
    }
}