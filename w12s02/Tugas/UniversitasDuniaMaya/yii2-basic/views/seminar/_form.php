<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seminar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seminar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_seminar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_seminar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_seminar')->textInput() ?>

    <?= $form->field($model, 'waktu_seminar')->textInput() ?>

    <?= $form->field($model, 'lokasi_seminar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
