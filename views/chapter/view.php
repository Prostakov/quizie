<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chapter */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['site/index']];
$this->params['breadcrumbs'][] = ['label' => $quiz->name, 'url' => ['quiz/view', 'id'=>$quiz->id]];
$this->params['breadcrumbs'][] = $model->num . ". " . $this->title;
?>
<div class="chapter-view">

    <h1><?= Html::encode($model->num.". ".$this->title) ?></h1>

    <?php if(Yii::$app->getUser()->id == $quiz->user_id ): ?>
    <p>
        <?= Html::a('Edit', ['update', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'quiz_id' => $quiz->id, 'chapter_num' => $model->num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Start Quiz!', ['#'], ['class' => 'btn btn-success', 'id' => 'start_quiz']) ?>
    </p>
    <?php endif; ?>

    <div class="results" style="display: none;">
        <p>Your result is <b>0%</b></p>
    </div>
    <?php foreach($model->questions as $question): ?>
        <div class="question_container" data-question="<?=Html::encode($question->num)?>">
        <p class="bold"><?=Html::encode($model->num.".".$question->num.". ".$question->name) ?> </p>
        <div class="btn-group-vertical btn-group-sm" data-toggle="buttons" data-correct-option="<?=Html::encode($question->correct_option)?>" >
        <?php foreach($question->options as $option): ?>
            <label class="btn btn-default" data-option="<?=Html::encode($option->num)?>">
                <input type="radio" name="options" />
                <?= Html::encode($option->num.". ".$option->name) ?>
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

    <?php
        $js = <<<EOT
        showAlert = function(id) {
            $('#error_msg>p').text('Question #'+id+' was left blank!');
            $('#error_msg').fadeIn(400);
        };
        $('#start_quiz').on('click', function(e){
            e.preventDefault();
            console.log('bebe');
        });
        $('#finish_quiz').on('click', function(){
            $('#error_msg').fadeOut(400);
            exitFlag = false;
            question_containers = $('.question_container');
            questions_count = question_containers.length;
            question_containers.each(function(){
                labels = $(this).find('label');
                activeCount = 0;
                labels.each(function(){
                    if ($(this).hasClass('active')) activeCount++;
                });
                if (activeCount == 0) {
                    showAlert($(this).attr('data-question'));
                    exitFlag = true;
                    return false;
                }
            });
            if (exitFlag) return;
            questions_correct_count = 0;
            question_containers.each(function(){
                correct_option = $(this).children('div').attr('data-correct-option');
                selected_option = $(this).find('label.active').attr('data-option');
                if (correct_option == selected_option){
                    $(this).addClass('green');
                    questions_correct_count++;
                }
                else {
                    $(this).addClass('red');
                    $(this).find('label[data-option='+correct_option+']').addClass('harsh_red');
                }
            });
            percentage_correct = questions_correct_count*100/questions_count;
            $('.results b').text(percentage_correct.toFixed(2)+"%");
            $('.results').show();
            $("body").animate({scrollTop:0}, '500', 'swing');
            $('.transparent_barrier').show();
        });
EOT;
        $this->registerJs($js, yii\web\View::POS_READY);
    ?>

</div>
