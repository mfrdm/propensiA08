<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory_product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batas_min')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'id_product')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
