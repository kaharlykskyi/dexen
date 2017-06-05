<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Glasses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="glasses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_main')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'manufacture')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput() ?>

    <?= $form->field($model, 'form')->textInput() ?>

    <?= $form->field($model, 'form_material')->textInput() ?>

    <?= $form->field($model, 'color_form')->textInput() ?>

    <?= $form->field($model, 'lens_material')->textInput() ?>

    <?= $form->field($model, 'color_lens')->textInput() ?>

    <?= $form->field($model, 'in_stock')->textInput() ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'display')->textInput() ?>

    <?= $form->field($model, 'hot_price')->textInput() ?>

    <?= $form->field($model, 'purchase_price')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
