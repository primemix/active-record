<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 */
class m161204_201453_create_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('teacher', [
            'id' => $this->primaryKey(),
            'teacher_name' => $this->string(80)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('teacher');
    }
}
