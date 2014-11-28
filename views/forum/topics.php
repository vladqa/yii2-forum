<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Topics */
/* @var $form ActiveForm */
?>
<div class="forum-topics">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'section_id') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'text') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- forum-topics -->
