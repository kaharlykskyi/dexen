<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clock */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Часы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этот товар?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'image_main',
            'images:ntext',
            'manufacture',
            'price',
            'gender',
            'mechanism',
            'type',
            'case_material',
            'case_form',
            'width',
            'height',
            'depth',
            'water_resistance',
            'glass',
            'watchband',
            'time_display',
            'dial_symbols',
            'color_case',
            'color_watchband',
            'in_stock',
            'count',
            'display',
            'description:ntext',
        ],
    ]) ?>

</div>
