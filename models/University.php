<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "university".
 *
 * @property integer $id
 * @property string $university_name
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * relation one-to-many
     * @var $id
     */

    /**
     * @return string (table name)
     */
    public static function tableName()
    {
        return 'university';
    }

    /**
     * @return array (rules)
     */
    public function rules()
    {
        return [
            [['university_name'], 'required'],
        ];
    }
    
    /**
     * return array (attributeLabels)
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'university_name' => 'University Name',
        ];
    }

    /**
     * relation One-to-Many: One University - many Department
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasMany(Department::className(), ['university_id' => 'id']);
    }
}