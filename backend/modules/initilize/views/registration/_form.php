<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\helpers;
use \backend\modules\initilize\models\Category;
use \backend\modules\initilize\models\Region;
use \backend\modules\initilize\models\Town;
use kartik\widgets\FileInput;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Registartion */
/* @var $form yii\widgets\ActiveForm */

//var_dump($model->getModel('feeModel'));exit();

?>

<div class="registartion-form ">
 <fieldset class="scheduler-border" >
        <legend class="scheduler-border">Add Registration</legend>
       
    <?php $form = ActiveForm::begin(
                ['options' => ['enctype' => 'multipart/form-data']]
        ); ?>
<div class="form-group">
        
                    <?php echo $form->field($model->getModel('photoModel'), 'image')->widget(FileInput::className(), [
                        'options' => [
                            "accept" => "image/*",
                            "type" => "file",
                        ],
                        'pluginOptions' => [
                            'showRemove' => true,
                            'showUpload' => true,

                        ],
                    ])->label('Scout Photo') ?>
</div>
<div class="form-group">
    
    <?= $form->field($model->getModel('registartionModel'), 'name')->textInput(['maxlength' => true, 'placeholder' => 'Name']) ?>
</div>


 
<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'father_name')->textInput(['maxlength' => true, 'placeholder' => 'Father Name']) ?>
</div>




<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'formb')->textInput(['placeholder' => 'Formb']) ?>

</div>


 
<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'nic')->textInput(['placeholder' => 'Nic']) ?>

</div>



  
<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'father_nic')->textInput(['placeholder' => 'Father Nic']) ?>


</div>




<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'dob')->widget(\kartik\widgets\DatePicker::classname(), [
        'options' => ['placeholder' => 'Choose Dob'],
        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>



</div>



 
<div class="form-group">

    <?= $form->field($model->getModel('registartionModel'), 'gender')->dropDownList(Gender()); ?>

</div>


 
<div class="form-group">
     
     <?php echo $form->field($model->getModel('registartionModel'), 'category_id')->dropDownList(
            ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Category', 'maxlength' => true]
            )

     //$form->field($model->getModel('registrationModel'), 'category_id')->textInput(['placeholder' => 'Category'])
            

  //$form->field($model, 'business_id')->textInput(['placeholder' => 'Business'])
    //$form->field($model, 'assiciation_id')->textInput(['placeholder' => 'Assiciation']) 
    //$form->field($model, 'status')->textInput(['placeholder' => 'Status']) 
            ?>

</div>




<div class="form-group">

     <?= $form->field($model->getModel('registartionModel'), 'qualificaton')->textInput(['maxlength' => true, 'placeholder' => 'Qualificaton']) ?>



</div>




<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'designation')->textInput(['maxlength' => true, 'placeholder' => 'Designation']) ?>



</div>


 
<div class="form-group">
    <?= $form->field($model->getModel('registartionModel'), 'jk_id')->textInput(['placeholder' => 'Jk']) ?>



</div>



<div class="form-group">
 

 <?php echo $form->field($model->getModel('registartionModel'), 'region_id')->dropDownList(
            ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Category', 'maxlength' => true] );


// $form->field($model->getModel('registartionModel'), 'region_id')->textInput(['placeholder' => 'Region']) 
            ?>
</div>

 
<div class="form-group">
    
 <?php echo $form->field($model->getModel('registartionModel'), 'town_id')->dropDownList(
            ArrayHelper::map(Town::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Category', 'maxlength' => true]);
// $form->field($model->getModel('registartionModel'), 'town_id')->textInput(['placeholder' => 'Town'])
?>
</div>
   

     
<div class=" form-group"> 

    <?php  echo $form->field($model->getModel('registartionModel'), 'status')->dropDownList(Statues()) ?>

</div>


  

    <div class="form-group">
        <?= Html::submitButton($model->getModel('registartionModel')->isNewRecord ? 'Register' : 'Update', ['class' => $model->getModel('registartionModel')->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Go To Registration', '../registration/index', ['class' => 'btn btn-info search-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</fieldset>
</div>
