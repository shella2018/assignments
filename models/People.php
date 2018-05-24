<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $general_info
 *
 * @property ProjAssignment[] $projAssignments
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'general_info'], 'required'],
            [['first_name', 'last_name', 'general_info'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'general_info' => 'General Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjAssignments()
    {
        return $this->hasMany(ProjAssignment::className(), ['person_id' => 'id']);
    }
}
