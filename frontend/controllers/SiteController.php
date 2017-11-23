<?php

namespace frontend\controllers;

use app\models\forms\FormData;
use app\models\forms\RealtyForm;
use app\models\forms\TravelForm;
use app\models\polis\Osago;
use app\models\polis\OsagoFind;
use app\models\polis\TravelFind;
use app\models\regions\GetRegions;
use app\models\settings\GetSiteSettings;
use app\models\settings\SiteSettings;
use app\models\statistic\Statistic;
use app\models\travel\GetCountry;
use app\models\travel\Travel;
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

    public $page_size = 2;


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
        $power = FormData::getOsagoPower();
        $regions = GetRegions::get_Regions();
        $model = new OsagoForm();
        $model->min_age = 1;
        $model->experience = 1;
        return $this->render('form/osago-form', ['model'=>$model, 'regions'=>$regions, 'power'=>$power]);
    }

    /**
     * Displays Live-Form.
     *
     * @return mixed
     */
    public function actionLiveForm()
    {
        $price = FormData::getLivePrice();
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
        $price = FormData::getRealtyPriceRepair();
        $regions = GetRegions::get_RealtyRegions();
        $model = new RealtyForm();
        return $this->render('form/realty-form', ['model'=>$model, 'regions'=>$regions, 'price'=>$price]);
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
        $countries = GetCountry::get_Countries();
        if(\Yii::$app->request->post()) {
            $message = '';
            $model = new TravelForm();
            $model->load(\Yii::$app->request->post());
            if ($model->validate()) {
                $models_peaple = [];
                $peaples = explode(',', $model->birth);
                foreach($peaples as $peaple){
                    $country_polis = '';
                    $country_name = GetCountry::get_Country($model->country);
                    $summ_insuranse = FormData::getSummInsurance($model->summ);
                    $duration = (strtotime (trim($model->date_from))-strtotime (trim($model->date_to)))/(60*60*24);
                    $travel_find = new TravelFind();
                    $category_travel_duration = $travel_find->findCategoryDuration($duration);
                    $date_born = date_create(trim($peaple));
                    $date_now= date_create();
                    $interval = date_diff($date_born,  $date_now);
                    $age = $interval->y;
                    $category_age = $travel_find->findAgeGroup($age);
                    $models = Travel::find()
                        ->where(['country_id' => $model->country])
                        ->andWhere(['duration' => $category_travel_duration])
                        ->andWhere(['age' => $category_age])
                        ->andWhere(['sum_insured' => $model->summ])
                        ->with('company')
                        ->asArray()
                        ->all();

                    $models_peaple[] = $models;
                }
                $polis_ids = [];
                $data_polises = [];
                $count_peaple = count($models_peaple);
                if($count_peaple > 1){
                    foreach ($models_peaple[0] as $key=>$polis){
                        $coincidence = 0;
                        $summary_price = $polis['price'];
                        for($i=1; $i < $count_peaple; $i++){
                            $count = 0;
                            foreach($models_peaple[$i] as $key2=>$polis2){
                                if($polis['company']['company_id']==$polis2['company']['company_id']){
                                    $count++;
                                    $summary_price+=$polis2['price'];
                                }
                            }
                           if($count==0){
                               $coincidence = 0;
                                break;
                           } else {
                               $coincidence = 1;
                           }
                        }
                        if($coincidence != 0){
                            $polis_ids[] = $polis['id'];
                            $data_polises[$polis['id']] = ['id'=>$polis['id'], 'price'=>$summary_price];
                        }
                    }
                } elseif($count_peaple == 1){
                    //print_r($models_peaple[0]); die('qqq');
                    foreach ($models_peaple[0] as $key=>$polis){
                        $polis_ids[] = $polis['id'];
                        $data_polises[$polis['id']] = ['id'=>$polis['id'], 'price'=>$polis['price']];
                    }
                } else {
                    return $this->render('list/travel-list', ['pages'=>[]]);
                }



                /*$country_polis = '';
                $country_name = GetCountry::get_Country($model->country);
                $summ_insuranse = FormData::getSummInsurance($model->summ);
                $duration = (strtotime (trim($model->date_from))-strtotime (trim($model->date_to)))/(60*60*24);
                $travel_find = new TravelFind();
                $category_travel_duration = $travel_find->findCategoryDuration($duration);
                $date_born = date_create(trim($model->birth));
                $date_now= date_create();
                $interval = date_diff($date_born,  $date_now);
                $age = $interval->y;
                $category_age = $travel_find->findAgeGroup($age);
                $query = Travel::find()
                    ->where(['country_id' => $model->country])
                    ->andWhere(['duration' => $category_travel_duration])
                    ->andWhere(['age' => $category_age])
                    ->andWhere(['sum_insured' => $model->summ])
                    ->with('company');
                $countQuery = clone $query;
                $count_polises = $countQuery->count();
                $pages = new Pagination(['totalCount' => $count_polises,
                    'pageSize' => $this->page_size,
                    'params' => [
                        'country' => $model->country,
                        'date_from' => $model->date_from,
                        'date_to' => $model->date_to,
                        'birth' => $model->birth,
                    ]]);
                $pages->pageSizeParam = 'per-page';
                $models = $query->offset($pages->offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();*/

                //print_r($polis_ids); die('www');
                $query = Travel::find()
                    ->where(['in', 'id', $polis_ids])
                    ->with('company');
                $countQuery = clone $query;
                $count_polises = $countQuery->count();
                $pages = new Pagination(['totalCount' => $count_polises,
                    'pageSize' => $this->page_size,
                    'params' => [
                        'country' => $model->country,
                        'date_from' => $model->date_from,
                        'date_to' => $model->date_to,
                        'birth' => $model->birth,
                    ]]);
                $pages->pageSizeParam = 'per-page';
                $models = $query->offset($pages->offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();

                if ($models != []) {
                    foreach ($models as $polis) {
                        $summ = FormData::getSummInsurance($polis['sum_insured']);
                        $polis['price'] = $data_polises[$polis['id']]['price'];
                        $country_polis = $country_polis . $this->renderPartial('list/travel-list-item', ['polis' => $polis, 'summ'=>$summ], true);
                    }
                } else {
                    $message = 'Извините, но по введенным вами данным предложений нет ';
                }
                return $this->render('list/travel-list',
                    [
                        'country_polis' => $country_polis,
                        'country_name' => $country_name,
                        'pages' => $pages,
                        'message'=>$message,
                        'model'=>$model,
                        'countries' => $countries,
                        'summ_insuranse' => $summ_insuranse,
                    ]);
            } else {
                $errors = $model->errors;
                //print_r($errors); die('qqq');
                return $this->render('list/travel-list', ['pages'=>[]]);
            }
        } elseif(\Yii::$app->request->get('page')) {
            $model = new TravelForm();
            $model->country = \Yii::$app->request->get('country', 1);
            $model->date_from = \Yii::$app->request->get('date_from', 1);
            $model->date_to = \Yii::$app->request->get('date_to', 1);
            $model->birth = \Yii::$app->request->get('birth', 1);
            if($model->validate()){
                $models_peaple = [];
                $peaples = explode(',', $model->birth);
                foreach($peaples as $peaple){
                    $message = '';
                    $country_polis = '';
                    $country_name = GetCountry::get_Country($model->country);
                    $summ_insuranse = FormData::getSummInsurance($model->summ);
                    $duration = (strtotime (trim($model->date_from))-strtotime (trim($model->date_to)))/(60*60*24);
                    $travel_find = new TravelFind();
                    $category_travel_duration = $travel_find->findCategoryDuration($duration);
                    $date_born = date_create(trim($peaple));
                    $date_now= date_create();
                    $interval = date_diff($date_born,  $date_now);
                    $age = $interval->y;
                    $category_age = $travel_find->findAgeGroup($age);
                    $models = Travel::find()
                        ->where(['country_id' => $model->country])
                        ->andWhere(['duration' => $category_travel_duration])
                        ->andWhere(['age' => $category_age])
                        ->andWhere(['sum_insured' => $model->summ])
                        ->with('company')
                        ->asArray()
                        ->all();

                    $models_peaple[] = $models;
                }
                $polis_ids = [];
                $data_polises = [];
                $count_peaple = count($models_peaple);
                if($count_peaple > 1){
                    foreach ($models_peaple[0] as $key=>$polis){
                        $coincidence = 0;
                        $summary_price = $polis['price'];
                        for($i=1; $i < $count_peaple; $i++){
                            $count = 0;
                            foreach($models_peaple[$i] as $key2=>$polis2){
                                if($polis['company']['company_id']==$polis2['company']['company_id']){
                                    $count++;
                                    $summary_price+=$polis2['price'];
                                }
                            }
                            if($count==0){
                                $coincidence = 0;
                                break;
                            } else {
                                $coincidence = 1;
                            }
                        }
                        if($coincidence != 0){
                            $polis_ids[] = $polis['id'];
                            $data_polises[$polis['id']] = ['id'=>$polis['id'], 'price'=>$summary_price];
                        }
                    }
                } elseif($count_peaple == 1){
                    //print_r($models_peaple[0]); die('qqq');
                    foreach ($models_peaple[0] as $key=>$polis){
                        $polis_ids[] = $polis['id'];
                        $data_polises[$polis['id']] = ['id'=>$polis['id'], 'price'=>$polis['price']];
                    }
                } else {
                    return $this->render('list/travel-list', ['pages'=>[]]);
                }
                $query = Travel::find()
                    ->where(['in', 'id', $polis_ids])
                    ->with('company');
                $countQuery = clone $query;
                $count_polises = $countQuery->count();
                $pages = new Pagination(['totalCount' => $count_polises,
                    'pageSize' => $this->page_size,
                    'params' => [
                        'country' => $model->country,
                        'date_from' => $model->date_from,
                        'date_to' => $model->date_to,
                        'birth' => $model->birth,
                    ]]);
                $pages->pageSizeParam = 'per-page';
                $page = \Yii::$app->request->get('page', 0);
                $offset = ($page -1) * $this->page_size;
                $models = $query->offset($offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();


                /*$message = '';
                $country_polis = '';
                $country_name = GetCountry::get_Country($model->country);
                $summ_insuranse = FormData::getSummInsurance($model->summ);
                $duration = (strtotime (trim($model->date_from))-strtotime (trim($model->date_to)))/(60*60*24);
                $travel_find = new TravelFind();
                $category_travel_duration = $travel_find->findCategoryDuration($duration);
                $date_born = date_create(trim($model->birth));
                $date_now= date_create();
                $interval = date_diff($date_born,  $date_now);
                $age = $interval->y;
                $category_age = $travel_find->findAgeGroup($age);
                $query = Travel::find()
                    ->where(['country_id' => $model->country])
                    ->andWhere(['duration' => $category_travel_duration])
                    ->andWhere(['age' => $category_age])
                    ->andWhere(['sum_insured' => $model->summ])
                    ->with('company');
                $countQuery = clone $query;
                $count_polises = $countQuery->count();
                $pages = new Pagination(['totalCount' => $count_polises,
                    'pageSize' => $this->page_size,
                    'params' => [
                        'country' => $model->country,
                        'date_from' => $model->date_from,
                        'date_to' => $model->date_to,
                        'birth' => $model->birth,
                    ]]);
                $pages->pageSizeParam = 'per-page';
                $page = \Yii::$app->request->get('page', 0);
                $offset = ($page -1) * $this->page_size;
                $models = $query->offset($offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();*/


                if ($models != []) {
                    foreach ($models as $polis) {
                        $summ = FormData::getSummInsurance($polis['sum_insured']);
                        $country_polis = $country_polis . $this->renderPartial('list/travel-list-item', ['polis' => $polis, 'summ'=>$summ], true);
                    }
                }
                return $this->render('list/travel-list',
                    [
                        'country_polis' => $country_polis,
                        'country_name' => $country_name,
                        'pages' => $pages,
                        'message'=>$message,
                        'model'=>$model,
                        'countries' => $countries,
                        'summ_insuranse' => $summ_insuranse,
                    ]);
            } else {
                $errors = $model->errors;
                //print_r($errors); die('qqq');
                return $this->render('list/travel-list', ['pages'=>[]]);
            }
        }
        return $this->render('list/travel-list', ['pages'=>[]]);
    }


    /**
     * Displays OSAGO-List.
     *
     * @return mixed
     */
    public function actionOsagoList()
    {
        $power = FormData::getOsagoPower();
        $regions = GetRegions::get_Regions();
        if(\Yii::$app->request->post()) {
            $message = '';
            $model = new OsagoForm();
            $model->load(\Yii::$app->request->post());
            //print_r( $model); die('qqq');
            if ($model->validate()) {
                $region_polis = '';
                $another_region_polis = '';
                $osago_find = new OsagoFind();

                $query = Osago::find()
                    ->where(['region_id' => $model->region])
                    ->andWhere(['power' => $model->power])
                    ->andWhere(['age' => $model->min_age])
                    ->andWhere(['experience' => $model->experience])
                    ->with('company');

                $countQuery = clone $query;
                $count_polises = $countQuery->count();
                $pages = new Pagination(['totalCount' => $count_polises,
                    'pageSize' => $this->page_size,
                    //'linkOptions' => ['data-method' => 'post'],
                    'params' => [
                        'region_id' => $model->region,
                        'power' => $model->power,
                        'min_age' => $model->min_age,
                        'experience' => $model->experience
                    ]]);

                $pages->pageSizeParam = 'per-page';
                $models = $query->offset($pages->offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();

                $region = GetRegions::getRegion($model->region);
                if ($models != []) {
                    foreach ($models as $polis) {
                        $region_polis = $region_polis . $this->renderPartial('list/osago-list-item', ['polis' => $polis], true);
                    }
                } else {
                    $message = 'Извините, но в выбранном регионе нет компаний предоставляющих услуги';
                }
                if($count_polises < $this->page_size){
                    $count = $this->page_size - $count_polises;
                    $another_region_polises_array =  $osago_find->getAnotherRegionPolis($model, $count);
                    if ($another_region_polises_array != []) {
                        foreach ($another_region_polises_array as $polis) {
                            $another_region_polis = $another_region_polis.$this->renderPartial('list/osago-list-item', ['polis' => $polis], true);
                        }
                    }
                }
                return $this->render('list/osago-list',
                    [
                        'region_polis' => $region_polis,
                        'another_region_polis' => $another_region_polis,
                        'pages' => $pages,
                        'region' => $region,
                        'message'=>$message,
                        'model'=>$model,
                        'regions'=>$regions,
                        'power'=>$power
                    ]);
            } else {
                $errors = $model->errors;
                return $this->render('list/osago-list');
            }
        } elseif(\Yii::$app->request->get('page')) {
            $model = new OsagoForm();
            $model->region = \Yii::$app->request->get('region_id', 1);
            $model->power = \Yii::$app->request->get('power', 1);
            $model->min_age = \Yii::$app->request->get('min_age', 1);
            $model->experience = \Yii::$app->request->get('experience', 1);
            if($model->validate()){
                $message = '';
                $region_polis = '';
                $another_region_polis = '';
                $query = Osago::find()
                    ->where(['region_id' =>  $model->region])
                    ->andWhere(['power' =>  $model->power])
                    ->andWhere(['age' => $model->min_age])
                    ->andWhere(['experience' => $model->experience])
                    ->with('company');
                $countQuery = clone $query;
                $pages = new Pagination(['totalCount' => $countQuery->count(),
                    'pageSize' => $this->page_size,
                    'params' => [
                        'region_id' => $model->region,
                        'power' => $model->power,
                        'age' => $model->min_age,
                        'experience' => $model->experience
                    ]]);
                $pages->pageSizeParam = 'per-page';
                $page = \Yii::$app->request->get('page', 0);
                $offset = ($page -1) * $this->page_size;
                $models = $query->offset($offset)
                    ->limit($pages->limit)
                    ->asArray()
                    ->all();
                $region = GetRegions::getRegion($model->region);
                if ($models != []) {
                    foreach ($models as $polis) {
                        $region_polis = $region_polis . $this->renderPartial('list/osago-list-item', ['polis' => $polis], true);
                    }
                }
                return $this->render('list/osago-list',
                    [
                        'region_polis' => $region_polis,
                        'another_region_polis' => $another_region_polis,
                        'pages' => $pages,
                        'region' => $region,
                        'message'=>$message,
                        'model'=>$model,
                        'regions'=>$regions,
                        'power'=>$power
                    ]);
            }else{
                return $this->render('list/osago-list');
            }
        }
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