<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UrlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="url-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Url', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'org_url:url',
            'gen',
            'click',
            'short_link',
            //'analitic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<style type="text/css">
    .thed{
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        padding: 8px;
        border-spacing: 2px;
    }
    thead tr th {
        border: 1px solid #ddd !important;
        text-align: center;
    }
    tbody tr th {
        border: 1px solid #ddd !important;
        text-align: center;
    }
    tbody tr td {
        border: 1px solid #ddd !important;
        text-align: center;
    }

</style>