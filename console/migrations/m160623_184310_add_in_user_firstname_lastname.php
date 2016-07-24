<?php

use yii\db\Migration;

class m160623_184310_add_in_user_firstname_lastname extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'firstname', $this->string()->notNull());
        $this->addColumn('{{%user}}', 'lastname', $this->string()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'firstname');
        $this->dropColumn('{{%user}}', 'lastname');
    }
}
