<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Town */

$this->title = 'Update Town: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Town', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="town-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
