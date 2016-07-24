<?php

use yii\db\Migration;

class m160724_193813_added_user_id_foreign_key_in_sorts_of_goods_table_and_drop_measure_id_index_and_column_and_measure_id1_index extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_sorts_of_goods_user1', '{{%sorts_of_goods}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');
        $this->dropIndex('idx-sorts_of_goods-measure_id', '{{%sorts_of_goods}}');
        $this->dropIndex('idx-sorts_of_goods-measure_id1', '{{%sorts_of_goods}}');
        $this->dropColumn('{{%sorts_of_goods}}', 'measure_id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_sorts_of_goods_user1', '{{%sorts_of_goods}}');
        $this->addColumn('{{%sorts_of_goods}}', 'measure_id', $this->integer(11)->notNull());
        $this->createIndex('idx-sorts_of_goods-measure_id', '{{%sorts_of_goods}}', 'measure_id');
        $this->createIndex('idx-sorts_of_goods-measure_id1', '{{%sorts_of_goods}}', 'measure_id');
    }
}