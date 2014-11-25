<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login')->label('Enter your login') ?>

    <?= $form->field($model, 'password')->label('Enter your password') ?>

    <?= $form->field($model, 'password_repeat')->label('Repeat your password') ?>

    <?= $form->field($model, 'user_email')->label('Enter your email (optionaly)')   ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
