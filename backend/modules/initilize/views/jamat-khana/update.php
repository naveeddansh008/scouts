<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\JamatKhana */

$this->title = 'Update Jamat Khana: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Jamat Khana', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jamat-khana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
