<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chapter */

$this->title = 'Add Chapter';
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $quiz->name, 'url' => ['quiz/view', 'id'=>$quiz->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chapter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
