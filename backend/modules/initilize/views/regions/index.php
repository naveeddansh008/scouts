<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\initilize\models\RegionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Region';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="region-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]);
     // Html::a('Create Region', ['create'], ['class' => 'btn btn-success btn-lg', 'id'=>'createRegion']) 
           // Html::a('Create Town', ['/intitilize/town/create'], ['class' => 'btn btn-success btn-lg' ,'id'=>'createTown','data-backdrop' => "static",'data-keyboard'=>"false"]) 
           
    //Html::a('Create Jamat Khana', ['/intitilize/jamat-khana/create'], ['class' => 'btn btn-success btn-lg','id'=>'createTown','data-backdrop' => "static",'data-keyboard'=>"false"]) 
    //Html::a('Create Registartion', ['create'], ['class' => 'btn btn-success btn-lg','id'=>'createRegistration','data-backdrop' => "static",'data-keyboard'=>"false"]) 
   
 //Html::button('Create Registartion',['value' => \yii\helpers\Url::to('../registration/create'),
                         //'class' => 'btn btn-success btn-lg', 'id'=>'createRegister','data-backdrop' => "static",'data-keyboard'=>"false"]) 
          
           
    ?>

  <fieldset class="scheduler-border">
        <legend class="scheduler-border">Select Action</legend>

    <p align="center">
            <?= Html::button('Create Region',['value' => \yii\helpers\Url::to('create'),
                         'class' => 'btn btn-success btn-lg', 'id'=>'createRegion']) ?>
           <?= Html::button('Create Town',['value' => \yii\helpers\Url::to('../town/create'),
                         'class' => 'btn btn-success btn-lg', 'id'=>'createTown','data-backdrop' => "static",'data-keyboard'=>"false"]) ?>
          
            <?= Html::button('Create Jamat Khana',['value' => \yii\helpers\Url::to('../jamat-khana/create'),
                         'class' => 'btn btn-success btn-lg', 'id'=>'createJk','data-backdrop' => "static",'data-keyboard'=>"false"]) ?>
          
            <?= Html::button('Categories',['value' => \yii\helpers\Url::to('../category/create'),
                         'class' => 'btn btn-success btn-lg', 'id'=>'createCategory','data-backdrop' => "static",'data-keyboard'=>"false"]) ?>
          
           
    </p>
  
      </fieldset>

        <div class="init-popup">    
        <?php
            yii\bootstrap\Modal::begin([
                // 'header'    => '<div style="font-family: Times;font-size: 20px;"><b>Create Regions</b></div>',
                // 'headerOptions' => ['id' => 'modalHeader'],
                'id'        => 'regionModal',
                'size'      => 'modal-md',
            ]);
            echo "<div id='modalContent'> </div>";
            yii\bootstrap\Modal::end();
        ?>
    </div>

       
        <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'name',
        // 'org_id',
        // 'business_id',
        // 'association_id',
        // 'status',
        // [
        //     'class' => 'yii\grid\ActionColumn',
        // ],
         [
            'attribute' => 'status',
            'label'     => 'Status',
            'value'     => function ($model)
            {
                return Status($model->status);
            }
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        // set a label for default menu
        'export' => [
            'label' => 'Page',
            'fontAwesome' => true,
        ],
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
            ]) ,
        ],
    ]); ?>

</div>
