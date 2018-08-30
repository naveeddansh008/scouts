<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Region */

$this->title = 'Update Region: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Region', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="region-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
