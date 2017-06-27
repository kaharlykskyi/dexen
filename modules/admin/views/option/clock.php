<?php
/**
 * @var $model array
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Json;
?>

<?php $form = ActiveForm::begin(); ?>

<?php //$data = Json::decode($model['price']);
$data = $model['price'];
?>
<div class="row">
    <div class="col-md-12">
        <select>
            <?php foreach ($data as $d) : ?>

            <?php endforeach; ?>
        </select>
    </div>
</div>

<?php ActiveForm::end(); ?>