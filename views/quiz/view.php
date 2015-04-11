<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Quiz */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quizzes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quiz-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->getUser()->id == $model->user_id ): ?>
    <p>
        <?= Html::a('Add Chapter', ['chapter/create', 'quiz_id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Edit Quiz', ['quiz/update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete Quiz', ['quiz/delete', 'id'=>$model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a($data->name,
                        Url::to(['chapter/view', 'quiz_id' => $data->quiz_id, 'chapter_num' => $data->num]));
                },
            ],
            'description:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function () {
                        return false;
                    },
                    'update' => function($url, $model, $key){
                        return Yii::$app->getUser()->id != $model->quiz->user_id ?
                            false : Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                ['chapter/update', 'quiz_id'=>$model->quiz->id, 'chapter_num'=>$model->num],
                                [
                                    'title' => 'Update',
                                    'data-pjax' => '0',
                                ]
                            );
                    },
                    'delete' => function($url, $model, $key){
                        return Yii::$app->getUser()->id != $model->quiz->user_id ?
                            false : Html::a(
                                '<span class="glyphicon glyphicon-trash"></span>',
                                ['chapter/delete', 'quiz_id'=>$model->quiz->id, 'chapter_num'=>$model->num],
                                [
                                    'title' => 'Delete',
                                    'data-pjax' => '0',
                                    'data-confirm' => 'Are you sure you want to delete this item?',
                                    'data-method' => 'post',
                                ]
                            );
                    },
                ],
            ],
        ],
    ]); ?>

</div>
