<?php

use yii\db\Migration;

class m160724_180233_add_user_id_foreign_key_in_cash_transaction_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_cash_transaction_user1', '{{%cash_transaction}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_cash_transaction_user1', '{{%cash_transaction}}');
    }
}