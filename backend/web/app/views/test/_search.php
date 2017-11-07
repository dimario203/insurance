<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\company\CompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'commission') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
