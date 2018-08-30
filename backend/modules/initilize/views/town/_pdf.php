<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Town */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Town', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="town-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Town'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'name',
        'region_id',
        'org_id',
        'business_id',
        'association_id',
        'status',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>