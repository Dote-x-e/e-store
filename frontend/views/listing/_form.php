<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\listing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'listingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'listingDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'videoUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
