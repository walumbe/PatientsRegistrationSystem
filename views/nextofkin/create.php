<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\NextOfKin $model */

$this->title = 'Create Next Of Kin';
$this->params['breadcrumbs'][] = ['label' => 'Next Of Kins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="next-of-kin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
