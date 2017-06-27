<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Portmone */

$this->title = 'Добавить кошелек';
$this->params['breadcrumbs'][] = ['label' => 'Кошельки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portmone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
