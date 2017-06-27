<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portmone */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Кошельки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portmone-view">

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
            'material',
            'width',
            'heigth',
            'depth',
            'type',
            'in_stock',
            'count',
            'display',
            'hot_price',
            'description:ntext',
        ],
    ]) ?>

</div>
