<?php 

namespace app\models;

use app\models\User;
use Webpatser\Uuid\Uuid;
use yii\base\Model;

class SignupForm extends Model
{
    public $username ;
    public $password_hash;

    public $password_confirm;

    public function rules()
    {
        return [
            [['username', 'password_hash', 'password_confirm'], 'required'],
            ['username', 'string', 'min' => 4, 'max' => 16],
            [['password_hash', 'password_confirm'], 'string', 'min' => 8, 'max' => 32],
            [['password_confirm'], 'compare', 'compareAttribute' => 'password_hash']
        ];
    }
    public function signup()
    {
        if(!$this->validate())
        {
            return NULL;
        }

        $user = new User();
        $user->id = Uuid::generate()->string;
        $user->username = $this->username;
        $user->password_hash = \Yii::$app->security->generatePasswordHash($this->password_hash);
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->access_token = \Yii::$app->security->generateRandomString();

        if($user->save(false))
        {
            return true;
        }

        return false;
    }

}