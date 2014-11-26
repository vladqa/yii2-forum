<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $login
 * @property string $password
 */
class User extends \yii\db\ActiveRecord
{
    public $rememberMe = true;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 32],
            [['login'], 'unique']
//            ['password', 'validatePassword'],
        ];
    }
/*
    public function login()
    {
        return [
            [['login', 'password'], 'required'],
            [['login'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 32],
            [['login'], 'unique']
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
