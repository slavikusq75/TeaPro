<?php

use yii\db\Migration;

class m160710_113100_add_in_sorts_of_goods_measure_id extends Migration
{
    public function up()
    {
        $this->addColumn('{{%sorts_of_goods}}', 'measure_id', $this->integer(11)->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%sorts_of_goods}}', 'measure_id');
    }
}
