<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Jurusan;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Prodi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <!--<?= $form->field($model, 'jurusan')->textInput() ?>-->
    <!--<?= $form->field($model, 'jurusan')->dropDownList(['1'=>'Teknologi Informasi','2'=>'Teknik Elektro']) ?>-->
    <?= $form->field($model, 'jurusan')->dropDownList( ArrayHelper::map(jurusan::find()->all(),'id','nama_jurusan') ) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
