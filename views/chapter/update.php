<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chapter */

$this->title = 'Update Chapter: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['site/index']];
$this->params['breadcrumbs'][] = ['label' => $quiz->name, 'url' => ['quiz/view', 'id'=>$quiz->id]];
$this->params['breadcrumbs'][] = ['label' => $model->num . ". " . $model->name, 'url' => ['chapter/view','quiz_id'=>$quiz->id,'chapter_num'=>$model->num]];
$this->params['breadcrumbs'][] = 'Update';


?>
<div class="chapter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
