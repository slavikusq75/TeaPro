<?php

use yii\db\Migration;

class m160724_185920_added_user_id_foreign_key_in_selling_goods_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_selling_goods_user1', '{{%selling_goods}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_selling_goods_user1', '{{%selling_goods}}');
    }
}