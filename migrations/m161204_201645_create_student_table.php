<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m161204_201645_create_student_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'student_name' => $this->string(80)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('student');
    }
}
