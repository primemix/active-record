<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $teacher_name
 *
 * Relations student table many-to-many teacher table
 * viaTable teacher_student
 * @property integer student_id
 * @property integer teacher_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @return string (table name)
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @return array (rules)
     */
    public function rules()
    {
        return [
            [['student_name'], 'required'],
        ];
    }

    /**
     * return array (attributeLabels)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_name' => 'Student Name',
        ];
    }

    /**
     * relation Many-to-Many: many Student - many Teacher
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['id' => 'teacher_id'])
            ->viaTable('teacher_student', ['student_id' => 'id']);
    }
}