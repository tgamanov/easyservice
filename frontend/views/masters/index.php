<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MastersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masters-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'masters_services_id',
                'value' => 'mastersServices.services_name',
            ],
            'masters_first_name',
            'masters_last_name',
            [
                'attribute' => 'masters_photo',
                'format' => 'html',
                'value' => function ($data) {

                    return Html::img(Yii::$app->params['back'] . '/' . $data['masters_photo'],
                        ['width' => '150px']);
                },
            ],
        ],

    ]); ?>

</div>
