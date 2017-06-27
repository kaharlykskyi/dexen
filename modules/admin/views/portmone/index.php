<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PortmoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Кошельки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portmone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить кошелек', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'material',
            // 'width',
            // 'heigth',
            // 'depth',
            // 'type',
            // 'in_stock',
            // 'count',
            // 'display',
            // 'hot_price',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
