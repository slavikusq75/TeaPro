<?php

use yii\db\Migration;

class m160724_202120_added_user_id_foreign_key_in_business_day_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_business_day_user1', '{{%business_day}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_business_day_user1', '{{%business_day}}');
    }
}