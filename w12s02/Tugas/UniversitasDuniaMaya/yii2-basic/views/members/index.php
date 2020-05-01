<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-index">
    <?php
        echo Alert::widget({
            'options' => [
                'class' => 'alert-info',
            ],
            'body' => 'Berikut adalah daftar member....',

        });

    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'account_id',
            'first_name',
            'last_name',
            'address',
            //'photograph',
            //'email:email',
            //'date_of_birth',
            //'sex',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
