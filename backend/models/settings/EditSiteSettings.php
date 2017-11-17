<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/30/17
 * Time: 6:33 PM
 */

namespace app\models\settings;


class EditSiteSettings
{
    public function getSettings(){
        $settings = SiteSettings::find()->asArray()->one();
        return $settings;
    }


    public function getSocialNetworks(){
        $return = [];
        $social_networks = SocialNetworks::find()->asArray()->all();
        foreach($social_networks as $network){
            $return[$network['name']] = $network['url'];
        }
        return  $return;
    }


    public function setSettings($post){
        $status = 'ok';
        $settings = SiteSettings::find()->one();
        if(isset($post['is_available'])){
            if($post['is_available']!=$settings->is_available){
                $settings->is_available=$post['is_available'];
            }
        }
        if(isset($post['polis']['all'])){
            $settings->find_all = 0;
            $settings->find_osago = 0;
            $settings->find_travel = 0;
            $settings->find_live = 0;
            $settings->find_realty = 0;
            $settings->find_kasko = 0;
            //print_r($post['polis']['all']); die('eee');
        } else {
            $settings->find_all = 1;
            if(isset($post['polis']['osago'])){
                $settings->find_osago = 1;
            } else {
                $settings->find_osago = 0;
            }
            if(isset($post['polis']['travel'])){
                $settings->find_travel = 1;
            } else {
                $settings->find_travel = 0;
            }
            if(isset($post['polis']['live'])){
                $settings->find_live = 1;
            } else {
                $settings->find_live = 0;
            }
            if(isset($post['polis']['realty'])){
                $settings->find_realty = 1;
            } else {
                $settings->find_realty = 0;
            }
            if(isset($post['polis']['kasko'])){
                $settings->find_kasko = 1;
            } else {
                $settings->find_kasko = 0;
            }
        }
        if(!$settings->save()){
            $status = 'error';
        }
        if(isset($post['network'])){
            $social_networks = SocialNetworks::find()->all();
            if($social_networks!=[]){
                foreach($social_networks as $network){
                    if(isset($post['network'][$network->name]) && !empty($post['network'][$network->name])){
                        $url = trim(strip_tags($post['network'][$network->name]));
                        if($url!=''){
                            if(strcasecmp($url, trim($network->url)) != 0){
                                if(stristr($url, 'https://') || stristr($url, 'http://')){
                                    $network->url = $url;
                                } else {
                                    $network->url = 'http://'.$url;
                                }
                                if(!$network->save()){
                                    $status = 'error';
                                }
                            }
                        }

                    }
                }
            }
        }
        if($status == 'error'){
            return false;
        } else {
            return true;
        }
    }
}