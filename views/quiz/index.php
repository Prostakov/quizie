<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJs("$('#w2 li').first().addClass('active');", yii\web\View::POS_READY);
?>
<div class="quiz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(!Yii::$app->user->isGuest): ?>
    <p>
        <?= Html::a('Add Quiz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function($data) {
                    return Html::a($data->name ,Url::to(['quiz/view','id'=>$data->id]));
                },
            ],
            'description:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function($action, $model, $key, $index) {
                    $url = Url::to(['quiz/'.$action,'id'=>$model->id]);
                    return $url;
                },
                'buttons' => [
                    'view' => function(){return false;},
                    'update' => function($url, $model, $key){
                        return Yii::$app->getUser()->id != $model->user_id ?
                            false : Html::a(
                                '<span class="glyphicon glyphicon-pencil"></span>',
                                ['quiz/update', 'id'=>$model->id],
                                [
                                    'title' => 'Update',
                                    'data-pjax' => '0',
                                ]
                            );
                    },
                    'delete' => function($url, $model, $key){
                        return Yii::$app->getUser()->id != $model->user_id ?
                            false : Html::a(
                                '<span class="glyphicon glyphicon-trash"></span>',
                                ['quiz/delete', 'id'=>$model->id],
                                [
                                    'title' => 'Delete',
                                    'data-pjax' => '0',
                                    'data-confirm' => 'Are you sure you want to delete this item?',
                                    'data-method' => 'post',
                                ]
                            );
                    },
                ]
            ],
        ],
    ]); ?>

</div>
