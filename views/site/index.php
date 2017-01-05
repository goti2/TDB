<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

$this->title = 'index';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($showDataForm, 'countryID')->dropDownList(ArrayHelper::map($showDataForm->countries, 'id', 'name'), ['prompt' => 'Не выбран']); ?>

    <?= $form->field($showDataForm, 'cityID')->dropDownList(ArrayHelper::map($showDataForm->cities, 'id', 'name'), ['prompt' => 'Не выбран']); ?>

    <?= $form->field($showDataForm, 'hotelID')->dropDownList(ArrayHelper::map($showDataForm->hotels, 'id', 'name'), ['prompt' => 'Не выбран']); ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>