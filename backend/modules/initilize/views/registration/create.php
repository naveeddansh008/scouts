<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\initilize\models\Registartion */

$this->title = 'Create Registartion';
$this->params['breadcrumbs'][] = ['label' => 'Registartion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registartion-create" >


    <?= $this->render('_form', [
        'model' => $model,
      
    ]) ?>

</div>
