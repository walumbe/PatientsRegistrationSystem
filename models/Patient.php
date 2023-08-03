<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $id
 * @property string $telephone
 * @property string $name
 * @property string $date_of_birth
 * @property string $id_number
 * @property string $address
 * @property string $county
 * @property string $sub_county
 * @property string $email
 * @property string $gender
 * @property string $user_id
 * @property string $marital_status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telephone', 'name', 'date_of_birth', 'id_number', 'address', 'county', 'sub_county', 'email', 'gender', 'marital_status'], 'required'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['telephone', 'name', 'id_number', 'address', 'county', 'sub_county', 'email', 'gender', 'marital_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telephone' => 'Telephone',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'id_number' => 'Id Number',
            'address' => 'Address',
            'county' => 'County',
            'sub_county' => 'Sub County',
            'email' => 'Email',
            'gender' => 'Gender',
            'marital_status' => 'Marital Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function login()
    {
        $model = new Patient();
        $model->user_id = Yii::$app->user->id;
        $model->save(false);
    }
}
