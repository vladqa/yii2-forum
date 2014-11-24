<?php
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><label>Login</label>: <?= Html::encode($model->login) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->user_email) ?></li>
</ul>
