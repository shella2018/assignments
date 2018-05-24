<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m180524_021211_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(191)->notNull(),
            'lastname' => $this->string(191)->notNull(),
            'general_info' =>$this->string(200)->notNull(s)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('person');
    }
}
