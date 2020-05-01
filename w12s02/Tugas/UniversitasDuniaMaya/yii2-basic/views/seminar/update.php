<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seminar */

$this->title = 'Update Seminar: ' . $model->id_seminar;
$this->params['breadcrumbs'][] = ['label' => 'Seminars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_seminar, 'url' => ['view', 'id' => $model->id_seminar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seminar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
