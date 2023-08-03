<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kin}}`.
 */
class m230803_124853_create_next_of_kin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%next_of_kin}}', [
            'id' => $this->primaryKey(),
            'patient_id'=> $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'date_of_birth' => $this->date()->notNull(),
            'id_number' => $this->string()->notNull(),
            'gender' => $this->string()->notNull(),
            'relationship' => $this->string()->notNull(),
            'telephone' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
        ]);

        $this->createIndex(
            'idx-next_of_kin-patient_id',
            'next_of_kin',
            'patient_id'
        );

        $this->addForeignKey(
            'fk-next_of_kin-patient_id',
            '{{%next_of_kin}}',
            'patient_id',
            '{{%patient}}',
            'id',
            'CASCADE',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-next_of_kin-patient_id', '{{%next_of_kin}}');
        $this->dropTable('{{%kin}}');
    }
}
