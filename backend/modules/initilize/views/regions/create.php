<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Region */

$this->title = 'Enter Region Details';
$this->params['breadcrumbs'][] = ['label' => 'Region', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="region-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
