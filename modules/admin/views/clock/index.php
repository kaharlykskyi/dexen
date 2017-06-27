<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ClockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Часы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить часы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'image_main',
            'images:ntext',
            'manufacture',
            // 'price',
            // 'gender',
            // 'mechanism',
            // 'type',
            // 'case_material',
            // 'case_form',
            // 'width',
            // 'height',
            // 'depth',
            // 'water_resistance',
            // 'glass',
            // 'watchband',
            // 'time_display:datetime',
            // 'dial_symbols',
            // 'color_case',
            // 'color_watchband',
            // 'in_stock',
            // 'count',
            // 'display',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
