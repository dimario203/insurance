<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/24/17
 * Time: 7:14 AM
 */

namespace backend\controllers;


use app\models\company\Company;
use app\models\company\CompanyEdite;
use yii\helpers\Url;
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

    public function actionGetCompanies(){
        $comp = new CompanyEdite();
        $companies = $comp->getCompanies();
        return $this->render('companies', ['companies'=>$companies]);
    }

    public function actionEditeCompany(){
        $comp = new CompanyEdite();
        $comp_id = \Yii::$app->request->get('id');
        if(!empty($comp_id)){
            $company = $comp->getCompany($comp_id);
        }

        return $this->render('company', ['company'=>$company]);
    }

    public function actionUpdateCompany(){

        $post = \Yii::$app->request->post();
        if(!empty($post) && isset($post['comp_id']) && !empty($post['comp_id'])){
            $comp = new CompanyEdite();
            if($comp->updateCompany($post)){
                $mess = 'Данные компании обновлены';
            } else {
                $mess = 'Данные компании не обновлены';
            }
            $company = $comp->getCompany($post['comp_id']);
            return $this->render('company', ['company'=>$company, 'mess' => $mess]);
        } else {
            $mess = 'Данные компании не обновлены';
            return $this->render('company', ['company'=>$post, 'mess' => $mess]);
        }
    }

    public function actionAddCompany(){

    }

}