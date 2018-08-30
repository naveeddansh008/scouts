<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Region */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="region-form">
   <fieldset class="scheduler-border">
        <legend class="scheduler-border">Add Region</legend>
         <div class="row">
            <div class="col-lg-12"> 
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Enter Region Name Here!'])


// $form->field($model, 'org_id')->textInput(['placeholder' => 'Org']) 
    //$form->field($model, 'business_id')->textInput(['placeholder' => 'Business']) 
    //$form->field($model, 'association_id')->textInput(['placeholder' => 'Association']) 

     ?>


    <?php echo $form->field($model, 'status')->dropDownList(Statues()
    ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?= Html::a('Go To Region', '../regions/index', ['class' => 'btn btn-info search-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    </div>
</fieldset>
</div>
