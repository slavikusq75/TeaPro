<?php

use yii\db\Migration;

class m160724_182718_added_user_id_column_and_foreign_key_in_departament_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%departament}}', 'user_id', $this->integer(11)->notNull());
        $this->createIndex('fk_departament_user1_idx', '{{%departament}}', 'user_id');
        $this->addForeignKey('fk_departament_user1', '{{%departament}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'NO ACTION');

    }

    public function down()
    {
        $this->dropForeignKey('fk_departament_user1', '{{%departament}}');
        $this->dropIndex('fk_departament_user1_idx', '{{%departament}}');
        $this->dropColumn('{{%departament}}', 'user_id');
    }
}