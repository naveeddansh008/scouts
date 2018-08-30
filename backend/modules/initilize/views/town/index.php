<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\modules\initilize\models\TownSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Town';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="town-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p><?= Html::button('Create Town',['value' => \yii\helpers\Url::to('create'),
                         'class' => 'btn btn-success ', 'id'=>'createTown','data-backdrop' => "static",'data-keyboard'=>"false"]) ?>
          
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>


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
        <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
        <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'name',
        //'region_id',
        // 'org_id',
        // 'business_id',
        // 'association_id',
        // 'status',
        // [
        //     'class' => 'yii\grid\ActionColumn',
        // ],
           [
            'attribute' => 'region_id',
            'label'     => 'Region Name ',
            'value'     => 'regionName.name'
        ],
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
