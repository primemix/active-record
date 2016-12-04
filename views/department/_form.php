<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\University;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $model app\models\University */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'university_id')->dropDownList(University::find()->select(['university_name', 'id'])->indexBy('id')->column())->label('Select Univer name'); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
