<?php

namespace frontend\controllers;

use app\models\statistic\Statistic;
use frontend\actions\PageAction;
use frontend\actions\PostAction;
use frontend\models\ContactForm;
use frontend\models\statistic\Geo;
use yeesoft\page\models\Page;
use yeesoft\post\models\Post;
use Yii;
use yii\base\Module;
use yii\data\Pagination;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends \yeesoft\controllers\BaseController
{
    public $freeAccess = true;

    /**
     * @inheritdoc
     */

    public function init(){
        parent::init();
        $on_off=1;
        $url_request = \Yii::$app->request->pathInfo;

    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionSiteMaintenance(){
        return $this->render('site-maintenance');
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        /*$url_request = \Yii::$app->request->pathInfo;
        print_r($url_request); die();*/
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    public function actionTestGeo(){
        $stat = new Statistic();
        $polis_type = Statistic::POLIS_TYPE_REALTY;
        $company_id = 1;
        if($stat->addClick($polis_type, $company_id)){
            echo 'work';
        }
        //$o['ip'] = '37.0.127.119';
        /*$geo = new Geo($o);
        $data_geo = $geo->get_value();
        $ip = $geo->get_ip();
        print_r($data_geo);*/
    }

}