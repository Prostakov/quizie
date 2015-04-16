<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use app\assets\ChapterAsset;
use app\assets\UserCookieAsset;

/* @var $this yii\web\View */
/* @var $model app\models\Chapter */

ChapterAsset::register($this);
if (Yii::$app->controller->action->id == 'view') UserCookieAsset::register($this);

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['site/index']];
$this->params['breadcrumbs'][] = [
    'label' => $quiz->name,
    'url' => ['quiz/view', 'id' => $quiz->id],
    'id' => 'quiz_name',
];

if (Yii::$app->controller->action->id == 'view') {
    $this->params['breadcrumbs'][] = $model->num . ". " . $this->title;
} else {
    $this->params['breadcrumbs'][] = [
        'label' => $model->num . ". " . $this->title,
        'url' => ['chapter/view', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num]
    ];;
    $this->params['breadcrumbs'][] = 'Random20';
}

?>
<div class="chapter-view">

    <h1 id="chapter_name"
        data-chapter="<?= Html::encode($model->num) ?>"><?= Html::encode($model->num . ". " . $this->title) ?></h1>

    <?php if (Yii::$app->getUser()->id == $quiz->user_id): ?>
        <p>
            <?= Html::a('Edit', ['update', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num],
                ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <?php if (Yii::$app->controller->action->id == 'view'): ?>
        <p>
            <?= Html::a('Random 20 Test!',
                ['chapter/random20', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num],
                ['class' => 'btn btn-success']) ?>
            <?= Html::a('Reset Quiz', ['#'], ['class' => 'btn btn-danger', 'id' => 'reset_quiz']) ?>
        </p>
    <?php endif; ?>

    <div class="results" style="display: none;">
        <p>Your result is <b>0%</b></p>
    </div>
    <?php foreach ($questions as $question): ?>
        <div class="question_container" data-question="<?= Html::encode($question->num) ?>">
            <p class="bold"><?= Html::encode($model->num . "." . $question->num . ". " . $question->name) ?> </p>

            <div class="btn-group-vertical btn-group-sm" data-toggle="buttons"
                 data-correct-option="<?= Html::encode($question->correct_option) ?>">
                <?php foreach ($question->options as $option): ?>
                    <label class="btn btn-default" data-option="<?= Html::encode($option->num) ?>">
                        <input type="radio" name="options"/>
                        <?= Html::encode($option->num . ". " . $option->name) ?>
                    </label>
                <?php endforeach; ?>
            </div>
            <div class="transparent_barrier" style="display: none"></div>
        </div>
    <?php endforeach; ?>

    <div id="error_msg" style="display: none">
        <p>Some of the questions were left blank!</p>
    </div>

    <div class="btn-group-lg">
        <button class='btn btn-success' id="finish_quiz">Finish</button>
    </div>
</div>
