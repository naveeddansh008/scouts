<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Town */

$this->title = 'Enter Town Details';
$this->params['breadcrumbs'][] = ['label' => 'Town', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="town-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
