<?php

namespace app\models;

use yii\base\Model;

class RegForm extends Model
{
    public $login;
    public $password;
    public $password_repeat;
    public $user_email;

    public function rules()
    {
        return [
            [['login', 'password', 'password_repeat'], 'required'],
            ['user_email', 'email'],
            ];
    }
}
?>
