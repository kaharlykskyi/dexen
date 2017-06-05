<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Position */

$this->title = 'Добавить позицию к заказу';
$this->params['breadcrumbs'][] = ['label' => 'Позиции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
