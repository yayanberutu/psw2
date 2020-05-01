<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PesertaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peserta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_peserta') ?>

    <?= $form->field($model, 'id_seminar') ?>

    <?= $form->field($model, 'nama_peserta') ?>

    <?= $form->field($model, 'status_peserta') ?>

    <?= $form->field($model, 'prodi_peserta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
