<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/7/17
 * Time: 6:58 AM
 */

namespace backend\controllers;

use app\models\company\Company;
use app\models\company\CompanyEdite;
use app\models\statistic\ClickCountStatistic;
use yii\helpers\Url;
use yii\web\Controller;


class AdminAjaxController extends Controller
{
    public function actionGetRegionStatisticAjax(){
        $data = [];
        $message = [];
        $post = \Yii::$app->request->post();
        $stat = new ClickCountStatistic();
        if(!empty($post)){
            $empty_post_data = 0;
            if(!isset($post['region'])){
                $message['region'] = 'Вы не выбрали регион. Выберите пожалуйста регион';
                $empty_post_data = 1;
            }
            if(!isset($post['polis']['osago']) && !isset($post['polis']['travel']) && !isset($post['polis']['live']) && !isset($post['polis']['realty']) && !isset($post['polis']['kasko'])){
                $message['polis'] = 'Вы не выбрали тип страхования. Выберите пожалуйста тип страхования';
                $empty_post_data = 1;
            }
            if($empty_post_data==1){
                return json_encode(['data'=>$data, 'message'=>$message]);
            } else {
                $data = $stat->clickRegionStatictic($post);
            }
        }
        return json_encode(['data'=>$data, 'message'=>$message]);
    }


    public function actionGetCompanyStatisticAjax(){
        $data = [];
        $message = [];
        $post = \Yii::$app->request->post();
        $stat = new ClickCountStatistic();
        if(!empty($post)){
            $empty_post_data = 0;
            if(!isset($post['companies'])){
                $message['companies'] = 'Вы не выбрали компанию. Выберите пожалуйста компанию';
                $empty_post_data = 1;
            }
            if(!isset($post['polis']['osago']) && !isset($post['polis']['travel']) && !isset($post['polis']['live']) && !isset($post['polis']['realty']) && !isset($post['polis']['kasko'])){
                $message['polis'] = 'Вы не выбрали тип страхования. Выберите пожалуйста тип страхования';
                $empty_post_data = 1;
            }
            if($empty_post_data==1){
                return json_encode(['data'=>$data, 'message'=>$message]);
            } else {
                $data = $stat->clickCompaniesStatictic($post);
            }
        }
        return json_encode(['data'=>$data, 'message'=>$message]);
    }


    public function actionGetDynamicStatisticAjax(){
        $data = [];
        $message = [];
        $post = \Yii::$app->request->post();
        $stat = new ClickCountStatistic();
        if(!empty($post)){
            if(!isset($post['polis']['osago']) && !isset($post['polis']['travel']) && !isset($post['polis']['live']) && !isset($post['polis']['realty']) && !isset($post['polis']['kasko'])){
                $message['polis'] = 'Вы не выбрали тип страхования. Выберите пожалуйста тип страхования';
                return json_encode(['data'=>$data, 'message'=>$message]);
            } else {
                $data = $stat->clickDynamicStatictic($post);
            }
        }
        return json_encode(['data'=>$data, 'message'=>$message]);
    }
}