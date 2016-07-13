<?php

use yii\db\Migration;

class m160713_210338_add_auto_increment_for_id_in_measures_table extends Migration
{
    public function up()
    {
        $this->alterColumn('{{%measures}}', 'id', $this->integer(11).'NOT NULL AUTO_INCREMENT');
    }

    public function down()
    {
        $this->alterColumn('{{%measures}}', 'id', $this->integer(11)->notNull());
    }
}
