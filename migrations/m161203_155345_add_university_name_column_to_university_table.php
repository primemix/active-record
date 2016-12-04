<?php

use yii\db\Migration;

/**
 * Handles adding university_name to table `university`.
 */
class m161203_155345_add_university_name_column_to_university_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('university', 'university_name', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('university', 'university_name');
    }
}
