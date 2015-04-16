<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UserCookieAsset extends AssetBundle
{
    public $js = [
        'js/jquery.cookie.js',
        'js/cookie_storage.js',
        'js/user_quizzes_cookie_storage.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
