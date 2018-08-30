<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\JamatKhana */

$this->title = 'Enter Jamat Khana Details';
$this->params['breadcrumbs'][] = ['label' => 'Jamat Khana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamat-khana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
