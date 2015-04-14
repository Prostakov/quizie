<?php

namespace app\controllers;

use app\models\Question;
use Yii;
use app\models\Chapter;
use app\models\Quiz;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChapterController implements the CRUD actions for Chapter model.
 */
class ChapterController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Displays a single Chapter model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($quiz_id, $chapter_num)
    {
        $chapter = Chapter::find()->where(['quiz_id' => $quiz_id, 'num' => $chapter_num])->with('questions.options',
            'quiz')->one();
//TODO        if (is_null($chapter)) var_dump('bebe');
        $quiz = $chapter->quiz;
        return $this->render('view', [
            'model' => $chapter,
            'questions' => $chapter->questions,
            'quiz' => $quiz,
        ]);
    }

    public function actionRandom20($quiz_id, $chapter_num)
    {
        $chapter = Chapter::find()->where(['quiz_id' => $quiz_id, 'num' => $chapter_num])->with('quiz')->one();
        $questionsCount = Question::find()->where(['chapter_id' => $chapter->id])->count();
        $random20Range = $this->UniqueRandomNumbersWithinRange(1, $questionsCount);
        $questions = Question::find()->where([
            'chapter_id' => $chapter->id,
            'num' => $random20Range,
        ])->with('options')->all();
        shuffle($questions);
//TODO        if (is_null($chapter)) var_dump('bebe');
        $quiz = $chapter->quiz;
        return $this->render('view', [
            'model' => $chapter,
            'questions' => $questions,
            'quiz' => $quiz,
            'random20Range' => $random20Range,
        ]);
    }

    private function UniqueRandomNumbersWithinRange($min, $max, $quantity=20) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    /**
     * Creates a new Chapter model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($quiz_id)
    {
        $quiz = Quiz::findOne(['id' => $quiz_id]);
        $model = new Chapter();
        $model->quiz_id = $quiz->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'quiz_id' => $model->quiz_id, 'chapter_num' => $model->num]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'quiz' => $quiz,
            ]);
        }
    }

    /**
     * Updates an existing Chapter model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($quiz_id, $chapter_num)
    {
        $model = Chapter::find()->where(['quiz_id' => $quiz_id, 'num' => $chapter_num])->with('questions.options',
            'quiz')->one();
        $quiz = $model->quiz;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'quiz_id' => $quiz->id, 'chapter_num'=>$model->num]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'quiz' => $quiz,
            ]);
        }
    }

    /**
     * Deletes an existing Chapter model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($quiz_id, $chapter_num)
    {
        Chapter::find()->where(['quiz_id' => $quiz_id, 'num' => $chapter_num])->one()->delete();

        return $this->redirect(['quiz/view', 'id'=>$quiz_id]);
    }

    /**
     * Finds the Chapter model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chapter the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chapter::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
