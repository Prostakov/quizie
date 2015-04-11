<?php
/**
 * Created by PhpStorm.
 * User: villain
 * Date: 10.04.15
 * Time: 16:49
 */

namespace app\components;

use app\models\Quiz;
use Yii;
use yii\base\ActionFilter;
use yii\web\ForbiddenHttpException;


class UserOwnerAccessControlFilter extends ActionFilter
{

    public function beforeAction($action)
    {
        if (Yii::$app->getUser()->isGuest) {
            return Yii::$app->getResponse()->redirect(['site/login']);
        }
        $user = Yii::$app->getUser()->identity;
        $controllerID = $action->controller->id;
        if ($controllerID == 'quiz') {
            $quiz = Quiz::findOne(['id'=> Yii::$app->getRequest()->queryParams['id']]);
            if ($quiz->user_id != $user->id) {
                throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));
                return false;
            }
        } elseif ($controllerID == 'chapter') {
            //TODO
        }
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        return parent::afterAction($action, $result);
    }
}