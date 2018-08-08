<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */

$this->title = 'Update Tb Siswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>