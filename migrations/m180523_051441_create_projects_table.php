<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m180523_051441_create_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string(191)->notNull(),
            'status' => $this->string(191)->notNull(),
            'last_days_to_showing_reports' =>$this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('projects');
    }
}