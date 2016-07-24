<?php

use yii\db\Migration;

class m160724_195833_added_measures_id_column_and_index_and_foreign_key_in_sorts_of_goods_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%sorts_of_goods}}', 'measures_id', $this->integer(11)->notNull());
        $this->createIndex('fk_sorts_of_goods_measures1_idx', '{{%sorts_of_goods}}', 'measures_id');
        $this->addForeignKey('fk_sorts_of_goods_measures1', '{{%sorts_of_goods}}', 'measures_id', '{{%measures}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropForeignKey('fk_sorts_of_goods_measures1', '{{%sorts_of_goods}}');
        $this->dropIndex('fk_sorts_of_goods_measures1_idx', '{{%sorts_of_goods}}');
        $this->dropColumn('{{%sorts_of_goods}}', 'measures_id');
    }
}