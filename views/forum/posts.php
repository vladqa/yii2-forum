<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form ActiveForm */
?>
<div class="forum-posts">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'topic_id') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'text') ?>
        <?= $form->field($model, 'date') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- forum-posts -->
