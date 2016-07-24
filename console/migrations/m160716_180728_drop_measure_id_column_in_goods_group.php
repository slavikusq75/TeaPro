<?php

use yii\db\Migration;

class m160716_180728_drop_measure_id_column_in_goods_group extends Migration
{
    public function up()
    {
        $this->dropForeignKey('fk_goods_group_measures1', '{{%goods_group}}');
        $this->dropIndex('fk_goods_group_measures1_idx', '{{%goods_group}}');
        $this->dropColumn('{{%goods_group}}', 'measures_id');
    }

    public function down()
    {
        $this->addColumn('{{%goods_group}}', 'measures_id', $this->integer(11)->notNull());
        $this->createIndex('fk_goods_group_measures1_idx', '{{%goods_group}}', 'measures_id');
        $this->addForeignKey('fk_goods_group_measures1', '{{%goods_group}}', 'measures_id', '{{%measures}}', 'id', 'NO ACTION', 'NO ACTION');
    }
}