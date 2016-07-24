<?php

use yii\db\Migration;

class m160724_185100_added_user_id_foreign_key_in_provider_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_provider_user1', '{{%provider}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_provider_user1', '{{%provider}}');
    }
}