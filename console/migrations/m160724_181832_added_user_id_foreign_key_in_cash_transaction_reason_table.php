<?php

use yii\db\Migration;

class m160724_181832_added_user_id_foreign_key_in_cash_transaction_reason_table extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_cash_transaction_reason_user1', '{{%cash_transaction_reason}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_cash_transaction_reason_user1', '{{%cash_transaction_reason}}');
    }
}