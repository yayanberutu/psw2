<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">
    <?php
        echo Alert::widget({
            'options' => [
                'class' => 'alert-info',
            ],
            'body' => 'Berikut adalah daftar peserta....',

        });

    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Peserta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_peserta',
            'id_seminar',
            'nama_peserta',
            'status_peserta',
            'prodi_peserta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
