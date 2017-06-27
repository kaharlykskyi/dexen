<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Option */

$this->title = 'Добавить опцию';
$this->params['breadcrumbs'][] = ['label' => 'Опции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="option-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
