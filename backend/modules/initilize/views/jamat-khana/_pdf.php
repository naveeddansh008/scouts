<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\JamatKhana */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Jamat Khana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamat-khana-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jamat Khana'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'name',
        'town_id',
        'region_id',
        'jk_no',
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