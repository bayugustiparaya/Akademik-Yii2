<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prodi */

$this->title = 'Tambah Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
