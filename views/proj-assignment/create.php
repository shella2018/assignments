<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProjAssignment */

$this->title = 'Create ProjAssignment';
$this->params['breadcrumbs'][] = ['label' => 'ProjAssignment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proj-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>

