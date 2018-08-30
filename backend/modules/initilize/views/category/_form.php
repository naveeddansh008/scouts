<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Category */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="category-form">
 <fieldset class="scheduler-border">
        <legend class="scheduler-border">Add Categories</legend>
         <div class="row">
            <div class="col-lg-12">
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>

   <?php
echo $form->field($model, 'status')->dropDownList(Statues());

//$form->field($model, 'status')->textInput(['placeholder' => 'Status'])
//$form->field($model, 'business_id')->textInput(['placeholder' => 'Business'])
//$form->field($model, 'association_id')->textInput(['placeholder' => 'Association'])
     ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         <?= Html::a('Go To Category', '../category/index', ['class' => 'btn btn-info search-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
 </div>
    </div>
</fieldset>
</div>
