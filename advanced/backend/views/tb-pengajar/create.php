<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TbPengajar */

$this->title = 'Tambah Pengajar';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pengajar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pengajar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
