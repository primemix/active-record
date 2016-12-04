<?php

use yii\db\Migration;

/**
 * Handles the creation of table `university`.
 */
class m161203_155259_create_university_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('university', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('university');
    }
}
