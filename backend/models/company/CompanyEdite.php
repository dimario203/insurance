<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/24/17
 * Time: 2:59 PM
 */

namespace app\models\company;


class CompanyEdite
{
    const  COMPANY_VISIBLE =1;
    const  COMPANY_NOT_VISIBLE =0;


    public function getCompanies(){
        $models = Company::find()->asArray()->all();

        return $models;
    }

    public function getCompany($comp_id){
        $model = Company::find()->where(['company_id'=>$comp_id])->asArray()->one();

        return $model;
    }

    public function updateCompany($post){
        $company = Company::findOne($post['company_id']);
        if($company===null){
            return false;
        }
        return $this->insertData($post,  $company);
    }


    public function addNewCompany($post){
        $new_comp = new Company();
        return $this->insertData($post,  $new_comp);
    }


    private function insertData($post, $company){
        if(isset($post['name']) && !empty($post['name'])){
            $company->name = $post['name'];
        }
        if(isset($post['url']) && !empty($post['url'])){
            $company->url = $post['url'];
        }
        if(isset($post['phone']) && !empty($post['phone'])){
            $company->phone = $post['phone'];
        }
        if(isset($post['commission']) && !empty($post['commission'])){
            $company->commission = $post['commission'];
        }
        if(isset($post['logo']) && !empty($post['logo'])){
            $company->logo = trim($post['logo']);
        }
        if(isset($post['visible']) && !empty($post['visible'])){
            $company->visible = self::COMPANY_VISIBLE;
        } else {
            $company->visible = self::COMPANY_NOT_VISIBLE;
        }
        if(!$company->save()){
            return ['status'=>'error', 'name'=>$company->name];
        } else {
            return ['status'=>'ok', 'name'=>$company->name];
        }
    }
}