<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Registartion */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Registartion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registartion-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Registartion'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'name',
        'father_name',
        'formb',
        'nic',
        'father_nic',
        'dob',
        'gender',
        'address_id',
        'category_id',
        'fee_id',
        'qualificaton',
        'designation',
        'contact_id',
        'jk_id',
        'region_id',
        'town_id',
        'business_id',
        'assiciation_id',
        'status',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>