<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SeminarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seminars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seminar-index">
    <?php
        echo Alert::widget({
            'options' => [
                'class' => 'alert-info',
            ],
            'body' => 'Berikut adalah daftar seminar....',

        });

    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Seminar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_seminar',
            'id_account',
            'nama_seminar',
            'tgl_seminar',
            'waktu_seminar',
            //'lokasi_seminar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
