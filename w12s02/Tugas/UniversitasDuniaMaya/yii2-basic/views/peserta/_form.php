<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peserta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_seminar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_peserta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodi_peserta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
