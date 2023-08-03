<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%patient}}`.
 */
class m230803_122914_create_patient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%patient}}', [
            'id' => $this->primaryKey(),
            'telephone' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'date_of_birth' => $this->string()->notNull(),
            'id_number' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'county' => $this->string()->notNull(),
            'sub_county' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'gender' => $this->string()->notNull(),
            'marital_status' => $this->string()->notNull(),
            'created_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%patient}}');
    }
}
