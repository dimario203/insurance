<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/24/17
 * Time: 7:14 AM
 */

namespace backend\controllers;


use yii\web\Controller;

class EplController extends Controller
{

    public $layout = '@vendor/yeesoft/yii2-yee-core/views/layouts/admin/main.php';

    public function actionOsago(){
        return $this->render('osago');
    }

    public function actionTravel(){
        return $this->render('travel');
    }

    public function actionLive(){
        return $this->render('live');
    }

    public function actionRealty(){
        return $this->render('realty');
    }
}