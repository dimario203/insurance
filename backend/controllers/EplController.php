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
use app\models\statistic\ClickCountStatistic;
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
        $comp = new CompanyEdite();
        if(!empty($post) && isset($post['company_id']) && !empty($post['company_id'])){
            $result = $comp->updateCompany($post);
            if($result['status']=='ok'){
                $mess = 'Данные компании '.$result['name'].' обновлены';
            } else {
                $mess = 'Данные компании '.$result['name'].' не обновлены';
            }
            $companies = $comp->getCompanies();
            return $this->render('companies', ['companies'=>$companies, 'mess' => $mess, 'status'=>$result['status']]);
        } else {
            $mess = 'Данные компании '.$post['name']?$post['name']:''.' не обновлены. Попробуйте снова';
            $status = 'error';
            $companies = $comp->getCompanies();
            return $this->render('companies', ['companies'=>$companies, 'mess' => $mess, 'status'=>$status]);
        }
    }


    public function actionAddCompany(){
        $post = \Yii::$app->request->post();
        if(empty($post)){
            return $this->render('add-company');
        }
        $comp = new CompanyEdite();
        $result = $comp->addNewCompany($post);
        if($result['status']=='ok'){
            $companies = $comp->getCompanies();
            $mess = 'Компания '.$result['name'].' создана';
            return $this->render('companies', ['companies'=>$companies, 'mess'=>$mess, 'status'=>$result['status']]);
        } else{
            $mess = 'Компания не создана';
            return $this->render('add-company', ['mess'=>$mess, 'status'=>$result['status']]);
        }


    }


    public function actionGetStatistic(){
        $post = \Yii::$app->request->post();
        $stat = new ClickCountStatistic();
        $data = $stat->clickCountStatictic($post);
        return $this->render('get-statistic', ['data'=>$data]);
    }

}