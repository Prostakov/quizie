<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chapter */

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

    <?php
    $js = <<<EOT
        showAlert = function(id) {
            $('#error_msg>p').text('Question #'+id+' was left blank!');
            $('#error_msg').fadeIn(400);
        };
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


    $user_quizzes_cookie_storage = <<<EOT
        quizName = $('#quiz_name').text();
        chapterNum = $('#chapter_name').attr('data-chapter');
        window.userQuizData = new UserQuizData();
        if (typeof $.cookie('userQuizData') == 'undefined') {
            userQuizData.addQuiz(quizName);
            userQuizData.addChapter(quizName, chapterNum);
        } else {
            userQuizData = JSON.parse($.cookie('userQuizData'));
            userQuizData.__proto__ = (new UserQuizData()).__proto__;
            protoQuiz = (new Quiz()).__proto__;
            protoChapter = (new Chapter()).__proto__;
            protoQuestion = (new Question()).__proto__;
            for (quizIndex=0; quizIndex<userQuizData.quizzes.length; ++quizIndex) {
                userQuizData.quizzes[quizIndex].__proto__ = protoQuiz;
                for (chapterIndex=0; chapterIndex<userQuizData.quizzes[quizIndex].chapters.length; ++chapterIndex) {
                    userQuizData.quizzes[quizIndex].chapters[chapterIndex].__proto__ = protoChapter;
                    for (questionIndex=0; questionIndex<userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions.length; ++questionIndex) {
                        userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions[questionIndex].__proto__ = protoQuestion;
                    }
                }
            }
            console.log(userQuizData);
            quizIndex = userQuizData.findQuiz(quizName);
            if (quizIndex == -1) {
                userQuizData.addQuiz(quizName);
                userQuizData.addChapter(quizName, chapterNum);
            } else {
                chapterIndex = userQuizData.quizzes[quizIndex].findChapter(chapterNum);
                if (chapterIndex == -1) {
                    userQuizData.addChapter(quizName, chapterNum);
                } else {
                    questions = userQuizData.quizzes[quizIndex].chapters[chapterIndex].questions;
                    for (questionIndex=0; questionIndex<questions.length; ++questionIndex) {
                        num = questions[questionIndex].num;
                        option = questions[questionIndex].option;
                        $('.question_container[data-question='+num+']').find('label.btn').eq(option-1).addClass('active');
                    }
                }
            }
        }
        $('.btn-group-vertical .btn.btn-default').on('click',function(){
            option = $(this).attr('data-option');
            num = $(this).parent().parent().attr('data-question');
            userQuizData.setQuestion(quizName, chapterNum, num, option);
            console.log(userQuizData);
            $.cookie('userQuizData', JSON.stringify(userQuizData), { expires: 7 });
        });
        $('#reset_quiz').on('click', function(e){
            e.preventDefault();
            $('.btn-group-vertical .btn.btn-default').removeClass('active').removeClass('harsh_red');
            $('.question_container').removeClass('green').removeClass('red');
            $('.transparent_barrier').hide();
            userQuizData.clearQuestions(quizName, chapterNum);
            $.cookie('userQuizData', JSON.stringify(userQuizData), { expires: 7 });
        });
EOT;
    $this->registerJs($js, yii\web\View::POS_READY);
    if (Yii::$app->controller->action->id == 'view') {
        $this->registerJs($user_quizzes_cookie_storage, yii\web\View::POS_READY);
    }
    ?>

</div>
