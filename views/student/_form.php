<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Teacher;
use app\models\Student;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id')->dropDownList(Teacher::find()->select(['student_name', 'id'])->indexBy('id')->column())->label('Select Univer name'); ?>

    <div class="form-group">
        <?= Html::submitButton(
            $model->isNewRecord ? 'Create' : 'Update', [
            'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
