<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */

$this->title = 'Update Teacher: ' . $model->teacher_name;
$this->params['breadcrumbs'][] = ['label' => 'Teacher', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
