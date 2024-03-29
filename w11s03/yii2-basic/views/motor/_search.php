<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MotorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'motorId') ?>

    <?= $form->field($model, 'motorName') ?>

    <?= $form->field($model, 'motorPrice') ?>

    <?= $form->field($model, 'motorDiscount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
