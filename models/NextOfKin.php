<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "next_of_kin".
 *
 * @property int $id
 * @property string $patient_id
 * @property string $name
 * @property string $date_of_birth
 * @property string $id_number
 * @property string $gender
 * @property string $relationship
 * @property string $telephone
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class NextOfKin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'next_of_kin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'name', 'date_of_birth', 'id_number', 'gender', 'relationship', 'telephone'], 'required'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['patient_id', 'name', 'id_number', 'gender', 'relationship', 'telephone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'id_number' => 'Id Number',
            'gender' => 'Gender',
            'relationship' => 'Relationship',
            'telephone' => 'Telephone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
