<?php

use yii\db\Migration;

class m160724_184634_added_user_id_foreign_key_in_price_of_goods_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_price_of_goods_user1', '{{%price_of_goods}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_price_of_goods_user1', '{{%price_of_goods}}');
    }
}