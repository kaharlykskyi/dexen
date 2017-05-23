<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GlassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Очки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glasses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить очки', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'form',
            // 'form_material',
            // 'color_form',
            // 'lens_material',
            // 'color_lens',
            // 'in_stock',
            // 'count',
            // 'display',
            // 'hot_price',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
