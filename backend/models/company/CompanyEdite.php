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
    public function getCompanies(){
        $models = Company::find()->asArray()->all();

        return $models;
    }

    public function getCompany($comp_id){
        $model = Company::find()->where(['comp_id'=>$comp_id])->asArray()->one();

        return $model;
    }

    public function updateCompany($post){

        $company = Company::findOne($post['comp_id']);
        if($company===null){
            return false;
        }
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
        if(isset($_FILES['logo']) && !empty($_FILES['logo'])){
            $tmp_name = $_FILES["logo"]["tmp_name"];
            $root_path = $_SERVER['DOCUMENT_ROOT'];
            $name = basename($_FILES["logo"]["name"]);
            move_uploaded_file($tmp_name, $root_path."/frontend/web/images/logo/$name");
            $company->logo = "/images/logo/$name";
        }

        if(!$company->save()){
            return false;
        } else {
            return true;
        }

    }

    public function addNewCompany($data){

    }
}