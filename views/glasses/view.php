<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Glasses */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Glasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glasses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'form',
            'form_material',
            'color_form',
            'lens_material',
            'color_lens',
            'in_stock',
            'count',
            'display',
            'purchase_price',
            'hot_price',
            'description:ntext',
        ],
    ]) ?>

</div>
