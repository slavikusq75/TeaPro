<?php

use yii\db\Migration;

class m160724_184145_added_user_id_foreign_key_in_measures_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_measures_user1', '{{%measures}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_measures_user1', '{{%measures}}');
    }
}