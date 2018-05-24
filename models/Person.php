<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $general_info
 *
 * @property ProjAssignment[] $projAssignments
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'general_info'], 'required'],
            [['firstname', 'lastname'], 'string', 'max' => 191],
            [['general_info'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
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
