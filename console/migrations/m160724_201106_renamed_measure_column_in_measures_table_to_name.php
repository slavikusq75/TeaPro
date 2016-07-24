<?php

use yii\db\Migration;

class m160724_201106_renamed_measure_column_in_measures_table_to_name extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%measures}}', 'measure', 'name');
    }

    public function down()
    {
        $this->renameColumn('{{%measures}}',  'name', 'measure');
    }
}
