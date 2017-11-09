<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/9/17
 * Time: 10:29 AM
 */

namespace console\controllers;

use yii\console\Controller;
use components\parser\ParserManager1;

class ParserController extends Controller
{
    public function actionParse(){
        \Yii::$app->parserManager->runParser();
        return 1;
    }
}