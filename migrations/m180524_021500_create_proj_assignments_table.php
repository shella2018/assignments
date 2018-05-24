<?php

use yii\db\Migration;

/**
 * Handles the creation of table `proj_assignments`.
 */
class m180524_021500_create_proj_assignments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
    {
        $this->createTable('proj_assignment', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer(),
            'project_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-proj_assignment-person_id'
            ,'proj_assignment','person_id');
        $this->addForeignKey(
            'fk-proj_assignment-person'
            ,'proj_assignment','person_id'
            ,'person','id'
        );

        $this->createIndex(
            'idx-proj_assignment-project_id'
            ,'proj_assignment','project_id');
        $this->addForeignKey(
            'fk-proj_assignment-projects'
            ,'proj_assignment','project_id'
            ,'projects','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-proj_assignment-person','proj_assignment');
        $this->dropForeignKey('fk-proj_assignment-projects','proj_assignment');
        $this->dropIndex('idx-proj_assignment-person_id','proj_assignment');
        $this->dropIndex('idx-proj_assignment-project_id','proj_assignment');
        $this->dropTable('proj_assignment');
    }
}
