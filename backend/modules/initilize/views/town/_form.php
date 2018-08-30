<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \backend\modules\initilize\models\Region;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Town */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="town-form">
<fieldset class="scheduler-border">
        <legend class="scheduler-border">Add Town</legend>
         <div class="row">
            <div class="col-lg-12"> 
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Enter Town Name Here!']) ?>

 <?php echo $form->field($model, 'region_id')->dropDownList(
            ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Category', 'maxlength' => true]
            )

// $form->field($model, 'region_id')->textInput(['placeholder' => 'Region'])
 // $form->field($model, 'org_id')->textInput(['placeholder' => 'Org'])
//$form->field($model, 'business_id')->textInput(['placeholder' => 'Business']) 
 //$form->field($model, 'association_id')->textInput(['placeholder' => 'Association'])
            ?>
 

 


<?php
echo $form->field($model, 'status')->dropDownList(Statues()
    );

//$form->field($model, 'status')->textInput(['placeholder' => 'Status'])
     ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         <?= Html::a('Go To Town', '../town/index', ['class' => 'btn btn-info search-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
 </div>
    </div>
</fieldset>

</div>
