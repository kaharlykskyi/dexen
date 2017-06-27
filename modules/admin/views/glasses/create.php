<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Glasses */

$this->title = 'Добавить очки';
$this->params['breadcrumbs'][] = ['label' => 'Очки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="glasses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
