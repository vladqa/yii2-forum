<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $login;
    public $password;
    public $rememberMe = true;

    private $_user = false;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // login and password are both required
            [['login', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['login', 'validateLogin'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],

        ];
    }

    /**
     * Finds user by [[login]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user == false) {
            $this->_user = User::findByLogin($this->login);
        }

        return $this->_user;
    }
    
    /**
     * Validate user
     */
    public function validateLogin()
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addError("login", "Login not found");
        } else {
        }
    }

    /**
     * Validate password
     */
    public function validatePassword()
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if ($user->password != $this->password) {
                $this->addError("password", "Incorrect password");
            } else {
            }
        }
    }

    /**
     * Logs in a user using the provided login and password.
     * @return boolean whether the user is logged in successfully
     */
    public function loginUser()
    {
        if ($this->validate()) {
//            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
            return Yii::$app->user->login($this->getUser());
        } else {
            return false;
        }
    }
}
