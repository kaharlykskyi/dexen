<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PortmoneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portmone-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'image_main') ?>

    <?= $form->field($model, 'images') ?>

    <?= $form->field($model, 'manufacture') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'heigth') ?>

    <?php // echo $form->field($model, 'depth') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'in_stock') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'display') ?>

    <?php // echo $form->field($model, 'hot_price') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
