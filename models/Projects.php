<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $project_name
 * @property string $status
 * @property string $last_days_to_showing_reports
 *
 * @property ProjAssignment[] $projAssignments
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_name', 'status'], 'required'],
            [['last_days_to_showing_reports'], 'safe'],
            [['project_name', 'status'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'status' => 'Status',
            'last_days_to_showing_reports' => 'Last Days To Show in Reports',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjAssignments()
    {
        return $this->hasMany(ProjAssignment::className(), ['project_id' => 'id']);
    }
}