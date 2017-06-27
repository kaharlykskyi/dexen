<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Option */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="option-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'field_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'json')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'display')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
