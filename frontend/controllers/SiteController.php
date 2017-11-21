<?php

namespace frontend\controllers;

use app\models\forms\TravelForm;
use app\models\regions\GetRegions;
use app\models\settings\GetSiteSettings;
use app\models\settings\SiteSettings;
use app\models\statistic\Statistic;
use app\models\travel\GetCountry;
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
use app\models\forms\OsagoForm;
use app\models\forms\LiveForm;

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
     * Displays homepage to Maintenance.
     *
     * @return mixed
     */

    public function actionSiteMaintenance(){
        return $this->render('site-maintenance');
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $polises = '';
        $polises_mobile = '';
        $settings = GetSiteSettings::getSettings();
        if($settings!=[]){
            if ($settings['find_all']!=1){
                return $this->render('index', ['polises'=>$polises, 'polises_mobile'=>$polises_mobile]);
            } else {
                if($settings['find_osago']==1){
                    $polises = $polises.$this->renderPartial('polisItems/osago-item', [], true);
                    $polises_mobile = $polises_mobile.$this->renderPartial('polisItems/osago-item-mobile', [], true);
                }
                if($settings['find_travel']==1){
                    $polises = $polises.$this->renderPartial('polisItems/travel-item', [], true);
                    $polises_mobile = $polises_mobile.$this->renderPartial('polisItems/travel-item-mobile', [], true);
                }
                if($settings['find_live']==1){
                    $polises = $polises.$this->renderPartial('polisItems/live-item', [], true);
                    $polises_mobile = $polises_mobile.$this->renderPartial('polisItems/live-item-mobile', [], true);
                }
                if($settings['find_realty']==1){
                    $polises = $polises.$this->renderPartial('polisItems/realty-item', [], true);
                    $polises_mobile = $polises_mobile.$this->renderPartial('polisItems/realty-item-mobile', [], true);
                }
                if($settings['find_kasko']==1){
                    $polises = $polises.$this->renderPartial('polisItems/kasko-item', [], true);
                    $polises_mobile = $polises_mobile.$this->renderPartial('polisItems/kasko-item-mobile', [], true);
                }
            }
        }

        return $this->render('index', ['polises'=>$polises, 'polises_mobile'=>$polises_mobile]);
    }

    /**
     * Displays Travel-Form.
     *
     * @return mixed
     */
    public function actionTravelForm()
    {
        $model = new TravelForm();
        $countries = GetCountry::get_Countries();
        return $this->render('form/travel-form', ['model'=>$model, 'countries'=>$countries]);
    }

    /**
     * Displays OSAGO-Form.
     *
     * @return mixed
     */
    public function actionOsagoForm()
    {
        $power = [
            '0'=>'от 50 до 70 л.с.',
            '1'=>'от 71 до 100 л.с.',
            '2'=>'от 101 до 120 л.с.',
            '3'=>'от 121 до 150 л.с.',
            '4'=>'от 151 и выше л.с.'
        ];
        $regions = GetRegions::get_Regions();
        $model = new OsagoForm();
        return $this->render('form/osago-form', ['model'=>$model, 'regions'=>$regions, 'power'=>$power]);
    }

    /**
     * Displays Live-Form.
     *
     * @return mixed
     */
    public function actionLiveForm()
    {
        $price = [
            '0'=>'50 000 руб.',
            '1'=>'100 000 руб.',
            '2'=>'250 000 руб.',
            '3'=>'500 000 руб.',
            '4'=>'1 000 000 руб.',
            '5'=>'более 1 000 000 руб.'
        ];
        $model = new LiveForm();
        $model->worked = 1;
        return $this->render('form/live-form', ['model'=>$model, 'price'=>$price]);
    }

    /**
     * Displays Realty-Form.
     *
     * @return mixed
     */
    public function actionRealtyForm()
    {

        return $this->render('form/realty-form');
    }

    /**
     * Displays KASKO-Form.
     *
     * @return mixed
     */
    public function actionKaskoForm()
    {

        return $this->render('form/kasko-form');
    }

    /**
     * Displays Travel-List.
     *
     * @return mixed
     */
    public function actionTravelList()
    {

        return $this->render('list/travel-list');
    }


    /**
     * Displays OSAGO-List.
     *
     * @return mixed
     */
    public function actionOsagoList()
    {

        return $this->render('list/osago-list');
    }


    /**
     * Displays Live-List.
     *
     * @return mixed
     */
    public function actionLiveList()
    {

        return $this->render('list/live-list');
    }


    /**
     * Displays Realty-List.
     *
     * @return mixed
     */
    public function actionRealtyList()
    {

        return $this->render('list/realty-list');
    }


    /**
     * Displays KASKO-List.
     *
     * @return mixed
     */
    public function actionKaskoList()
    {

        return $this->render('list/kasko-list');
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