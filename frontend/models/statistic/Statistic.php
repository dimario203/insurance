<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/31/17
 * Time: 5:48 PM
 */

namespace app\models\statistic;


use frontend\models\statistic\Geo;

class Statistic
{
    const POLIS_TYPE_OSAGO = 1;
    const POLIS_TYPE_TRAVEL = 2;
    const POLIS_TYPE_LIVE = 3;
    const POLIS_TYPE_REALTY = 4;
    const POLIS_TYPE_KASKO = 5;


    public function addClick($polis_type, $company_id){
        $model = new ClickCount();
        $model->polis_type = $polis_type;
        $model->date = time();
        $model->company_id = $company_id;
        if (filter_input(INPUT_COOKIE, 'geo_click')) {
            $model->region_id = (filter_input(INPUT_COOKIE, 'geo_click'));
        } else {
            $geo = new Geo();
            $data_geo = $geo->get_value();/**/


            /*$o['ip'] = '37.0.123.65';
            $geo = new Geo($o);
            $data_geo = $geo->get_value();
            //$data_geo['city'] = 'Каза';/**/


            if ($data_geo == []) {
                $model->region_id = '';
            } elseif ($data_geo['country'] != 'RU') {
                $model->region_id = -1;//Enother countries
            } else {
                $regions = Region::find()->where(['name' => $data_geo['city']])->with('locality')->asArray()->all();
                if ($regions != []) {
                    foreach ($regions as $region) {//Проверяем есть ли в найденных регионах область, которая соответствует области из $data_geo
                        if (!empty($region['locality'])) {
                            if (strcasecmp($data_geo['region'], trim($region['locality']['name'])) == 0) {
                                $model->region_id = $region['region_id'];
                                break;
                            }
                        }
                    }//Если области в табличке нету, ищем название области в vk.com
                    if (empty($model->region_id)) {
                        $region_vk = $this->apiVkRegion($data_geo['region']);
                        if (isset($region_vk['response']) && $region_vk['response'] != []) {
                            foreach ($regions as $region) {//Проверяем есть ли в найденных регионах область, которая соответствует области из apiVkRegion()
                                if (!empty($region['locality'])) {
                                    if (strcasecmp(trim($region_vk['response'][0]['title']), trim($region['locality']['name'])) == 0) {
                                        $model->region_id = $region['region_id'];
                                        break;
                                    }
                                }
                            }//Если области в присланном ответе vk.com нету, проверяем - есть ли вообще эта область(из контакта) в табличке "locality"
                            if (empty($model->region_id)) {
                                $locality = Locality::find()
                                    ->where(['name' => $data_geo['region']])
                                    ->asArray()
                                    ->limit(1)
                                    ->one();
                                if ($locality != []) {//Проверяем, возможно у нас есть область
                                    $this->checkLocality($data_geo['city'], $locality, $model);

                                    /*$region_names_vk = $this->apiVkCity($data_geo['city']);
                                    if(isset($region_names_vk['response']) && $region_names_vk['response']!=[]){
                                        $key_row_vk=0;
                                        $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                                        foreach($region_names_vk['response'] as $key=>$region_name){
                                            if(isset($region_name['region'])){
                                                if(strcasecmp(trim($region_name['region']), $locality['name'])==0){
                                                    $count_city++;
                                                    $key_row_vk = $key;
                                                }
                                            } else {
                                                if(strcasecmp(trim($region_name['title']), $locality['name'])==0){
                                                    $count_city++;
                                                    $key_row_vk = $key;
                                                }
                                            }
                                        }
                                        if($count_city==1){//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из таблички 'locality'
                                            $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                            $find_vk_name_in_table = Region::find()
                                                ->where(['name'=>$new_region_name, 'locality_id'=>$locality['locality_id']])
                                                ->asArray()
                                                ->limit(1)
                                                ->one();
                                            if($find_vk_name_in_table!=[]){//Если мы таки нашли имя из vk.com в таблице, то берем его id
                                                $model->region_id = $find_vk_name_in_table['region_id'];
                                            } else {//Если нет, то создаем новый регион
                                                $new_region_id = $this->newRegion($new_region_name, $locality['locality_id']);
                                                $model->region_id = $new_region_id;
                                            }
                                        } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то создаем новый регион и область берем ту, которую нашли в табличке 'locality'
                                            $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                                            $model->region_id = $new_region_id;
                                        }
                                    }*/
                                } else {//Если область не найдена, попробуем поискать область из контакта
                                    $locality = Locality::find()
                                        ->where(['name' => trim($region_vk['response'][0]['title'])])
                                        ->asArray()
                                        ->limit(1)
                                        ->one();
                                    if ($locality != []) {//Проверяем, возможно у нас есть имя по vk.com
                                        $this->checkLocality($data_geo['city'], $locality, $model);

                                        /*$region_names_vk = $this->apiVkCity($data_geo['city']);
                                        if(isset($region_names_vk['response']) && $region_names_vk['response']!=[]){
                                            $key_row_vk=0;
                                            $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                                            foreach($region_names_vk['response'] as $key=>$region_name){
                                                if(isset($region_name['region'])){
                                                    if(strcasecmp(trim($region_name['region']), $locality['name'])==0){
                                                        $count_city++;
                                                        $key_row_vk = $key;
                                                    }
                                                } else {
                                                    if(strcasecmp(trim($region_name['title']), $locality['name'])==0){
                                                        $count_city++;
                                                        $key_row_vk = $key;
                                                    }
                                                }
                                            }
                                            if($count_city==1){//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из таблички 'locality'
                                                $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                                $find_vk_name_in_table = Region::find()
                                                    ->where(['name'=>$new_region_name, 'locality_id'=>$locality['locality_id']])
                                                    ->asArray()
                                                    ->limit(1)
                                                    ->one();
                                                if($find_vk_name_in_table!=[]){//Если мы таки нашли имя из vk.com в таблице, то берем его id
                                                    $model->region_id = $find_vk_name_in_table['region_id'];
                                                } else {//Если нет, то создаем новый регион
                                                    $new_region_id = $this->newRegion($new_region_name, $locality['locality_id']);
                                                    $model->region_id = $new_region_id;
                                                }
                                            } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то создаем новый регион и область берем ту, которую нашли в табличке 'locality'
                                                $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                                                $model->region_id = $new_region_id;
                                            }
                                        }*/
                                    } else {
                                        $new_region_id = $this->newLocalityAndRegion($data_geo['region'], $data_geo['city']);
                                        $model->region_id = $new_region_id;
                                    }
                                }
                            }
                        } else {//Если vk.com ничего не нашел, мы создаем новую область и регион
                            $new_region_id = $this->newLocalityAndRegion($data_geo['region'], $data_geo['city']);
                            $model->region_id = $new_region_id;
                        }
                    }

                } else {//Если мы не нашли регион в нашей табличке "region", то ищем есть ли такая у нас область
                    $locality = Locality::find()
                        ->where(['name' => $data_geo['region']])
                        ->asArray()
                        ->limit(1)
                        ->one();
                    if ($locality != []) {//Если область есть, то пробуем найти название города в vk.com(чтобы стандартизировать имена с vk.com) и создаем новый регион привязанный к этой области
                        //print_r($locality); die('34');
                        $this->checkLocality($data_geo['city'], $locality, $model);

                        /*$region_names_vk = $this->apiVkCity($data_geo['city']);
                        if(isset($region_names_vk['response']) && $region_names_vk['response']!=[]){
                            $key_row_vk=0;
                            $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                            foreach($region_names_vk['response'] as $key=>$region_name){
                                if(isset($region_name['region'])){
                                    if(strcasecmp(trim($region_name['region']), $locality['name'])==0){
                                        $count_city++;
                                        $key_row_vk = $key;
                                    }
                                } else {
                                    if(strcasecmp(trim($region_name['title']), $locality['name'])==0){
                                        $count_city++;
                                        $key_row_vk = $key;
                                    }
                                }
                            }
                            if($count_city==1){//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из таблички 'locality'
                                $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                $find_vk_name_in_table = Region::find()
                                    ->where(['name'=>$new_region_name, 'locality_id'=>$locality['locality_id']])
                                    ->asArray()
                                    ->limit(1)
                                    ->one();
                                if($find_vk_name_in_table!=[]){//Если мы таки нашли имя из vk.com в таблице, то берем его id
                                    $model->region_id = $find_vk_name_in_table['region_id'];
                                } else {//Если нет, то создаем новый регион
                                    $new_region_id = $this->newRegion($new_region_name, $locality['locality_id']);
                                    $model->region_id = $new_region_id;                            }

                            } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то создаем новый регион и область берем ту, которую нашли в табличке 'locality'
                                $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                                $model->region_id = $new_region_id;
                            }
                        } else {//Если ответ от vk.com пустой, то создаем новый регион в найденной области
                            $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                            $model->region_id = $new_region_id;
                        }*/

                    } else {//Если область тоже не найдена, то создаем новую область и регион, предварительно стандартизировав данные с vk.com
                        $region_vk = $this->apiVkRegion($data_geo['region']);
                        if (isset($region_vk['response'][0]) && $region_vk['response'][0] != []) {
                            $locality = Locality::find()
                                ->where(['name' => trim($region_vk['response'][0]['title'])])
                                ->asArray()
                                ->limit(1)
                                ->one();
                        }
                        if ($locality != []) {
                            $this->checkLocality($data_geo['city'], $locality, $model);

                            /*$region_names_vk = $this->apiVkCity($data_geo['city']);
                            if(isset($region_names_vk['response']) && $region_names_vk['response']!=[]){
                                $key_row_vk=0;
                                $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                                foreach($region_names_vk['response'] as $key=>$region_name){
                                    if(isset($region_name['region'])){
                                        if(strcasecmp(trim($region_name['region']), $locality['name'])==0){
                                            $count_city++;
                                            $key_row_vk = $key;
                                        }
                                    } else {
                                        if(strcasecmp(trim($region_name['title']), $locality['name'])==0){
                                            $count_city++;
                                            $key_row_vk = $key;
                                        }
                                    }
                                }
                                if($count_city==1){//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из таблички 'locality'
                                    $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                    $find_vk_name_in_table = Region::find()
                                        ->where(['name'=>$new_region_name, 'locality_id'=>$locality['locality_id']])
                                        ->asArray()
                                        ->limit(1)
                                        ->one();
                                    if($find_vk_name_in_table!=[]){//Если мы таки нашли имя из vk.com в таблице, то берем его id
                                        $model->region_id = $find_vk_name_in_table['region_id'];
                                    } else {//Если нет, то создаем новый регион
                                        $new_region_id = $this->newRegion($new_region_name, $locality['locality_id']);
                                        $model->region_id = $new_region_id;                            }

                                } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то создаем новый регион и область берем ту, которую нашли в табличке 'locality'
                                    $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                                    $model->region_id = $new_region_id;
                                }
                            } else {//Если ответ от vk.com пустой, то создаем новый регион в найденной области
                                $new_region_id = $this->newRegion($data_geo['city'], $locality['locality_id']);
                                $model->region_id = $new_region_id;
                            }*/

                        } else {
                            $region_names_vk = $this->apiVkCity($data_geo['city']);
                            if (isset($region_names_vk['response']) && $region_names_vk['response'] != []) {//Если есть совпадение названий городов по vk.com
                                $key_row_vk = 0;
                                $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                                foreach ($region_names_vk['response'] as $key => $region_name) {
                                    if (isset($region_name['region'])) {
                                        if (strcasecmp(trim($region_name['region']), $data_geo['region']) == 0) {
                                            $count_city++;
                                            $key_row_vk = $key;
                                        }
                                    } elseif (strcasecmp(trim($region_name['title']), $data_geo['region']) == 0) {
                                        $count_city++;
                                        $key_row_vk = $key;
                                    }
                                }
                                if ($count_city == 1) {//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из $data_geo['region']
                                    $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                    $new_region_id = $this->newLocalityAndRegion($data_geo['region'], $new_region_name);
                                    $model->region_id = $new_region_id;
                                } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то попробуем поискать через область из vk.com
                                    $region_vk = $this->apiVkRegion($data_geo['region']);
                                    if (isset($region_vk['response'][0]) && $region_vk['response'][0] != []) {
                                        $key_row_vk = 0;
                                        $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
                                        $exact_match = 0;//Счетчик для точного совпадения
                                        foreach ($region_names_vk['response'] as $key => $region_name) {
                                            if (isset($region_name['region'])) {
                                                if (strcasecmp(trim($region_name['region']), trim($region_vk['response'][0]['title'])) == 0) {
                                                    $count_city++;
                                                    $key_row_vk = $key;
                                                    if (strcasecmp(trim($region_name['title']), $data_geo['city'])) {
                                                        $exact_match++;
                                                    }
                                                }
                                            } elseif (strcasecmp(trim($region_name['title']), trim($region_vk['response'][0]['title'])) == 0) {
                                                $count_city++;
                                                $key_row_vk = $key;
                                            }
                                        }
                                        if ($count_city == 1) {//Если мы нашли одно совпадение с контактом, то берем имя нашего региона и области из vk.com
                                            $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                                            $new_region_id = $this->newLocalityAndRegion(trim($region_vk['response'][0]['title']), $new_region_name);
                                            $model->region_id = $new_region_id;
                                        } elseif ($exact_match == 1) {//Если произошло точное совпадение имени
                                            $new_region_name = $data_geo['city'];
                                            $new_locality_name = trim($region_vk['response'][0]['title']);
                                            $new_region_id = $this->newLocalityAndRegion($new_locality_name, $new_region_name);
                                            $model->region_id = $new_region_id;
                                        }
                                    } else {
                                        $new_region_id = $this->newLocalityAndRegion($data_geo['region'], $data_geo['city']);
                                        $model->region_id = $new_region_id;
                                    }
                                }
                            } else {//Если ответ от vk.com пустой, то создаем новый регион и область
                                $new_region_id = $this->newLocalityAndRegion($data_geo['region'], $data_geo['city']);
                                $model->region_id = $new_region_id;
                            }
                        }
                    }
                }
            }
        }
        if(!$model->save()){
            print_r($model->getErrors());
        }

        if (!filter_input(INPUT_COOKIE, 'geo_click')) {
            setcookie('geo_click', $model->region_id, time() + 3600 * 24 * 1, '/');
        }

        return true;
    }


    private function apiVkCity($region){
        $lenght = mb_strlen($region);
        if($lenght){
            if($lenght<16) {
                $string = $region;
            } else {
                $string = mb_substr($region, 0, 15);
            }
        } else {
            return [];
        }
        $ch = curl_init('https://api.vk.com/method/database.getCities?country_id=1&q='.urlencode($string));
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $region_name = json_decode(curl_exec($ch), true);

        return $region_name;
    }

    private function apiVkRegion($region, $recursia = true){
        $position = mb_strpos(trim($region),' ');//if 'region' content 2 and more words
        if($position){
            $string = mb_substr($region, 0, $position);
        } else {
            $string = $region;
        }
        $ch = curl_init('https://api.vk.com/method/database.getRegions?country_id=1&count=1&q='.urlencode($string));
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $region_name = json_decode(curl_exec($ch), true);

        if(isset($region_name['response']) && ($region_name['response']==[]) && $recursia || isset($region_name['error']) && $recursia){
            $position = mb_strpos(trim($region),' ');
            if($position){//Если область состоит из нескольких слов, то попробуем поискать по последнему слову
                $pos_right = mb_strrpos(trim($region),' ');
                $sub_string = mb_substr(trim($region), $pos_right);
                $region_name = $this->apiVkRegion($sub_string, false);
            }
        }
        return $region_name;
    }

    private function newLocalityAndRegion($locality_name, $region_name){
        $locality_row = new Locality();
        $region_row = new Region();
        $locality_row->name = $locality_name;
        if(!$locality_row->save()){
            print_r($locality_row->getErrors());
        }
        $region_row->name = $region_name;
        $region_row->locality_id = $locality_row->locality_id;
        if(!$region_row->save()){
            print_r($region_row->getErrors());
        }

        return $region_row->region_id;
    }

    private function newRegion($region_name, $locality_id){
        $region_row = new Region();
        $region_row->name = $region_name;
        $region_row->locality_id = $locality_id;
        if(!$region_row->save()){
            print_r($region_row->getErrors());
        }

        return $region_row->region_id;
    }

    private function checkLocality($city_geo, $locality, $model){
        $region_names_vk = $this->apiVkCity($city_geo);
        if(isset($region_names_vk['response']) && $region_names_vk['response']!=[]){
            $key_row_vk=0;
            $count_city = 0;//Счетчик совпадений, в области может быть несколько городов с подобными названиями
            foreach($region_names_vk['response'] as $key=>$region_name){
                if(isset($region_name['region'])){
                    if(strcasecmp(trim($region_name['region']), $locality['name'])==0){
                        $count_city++;
                        $key_row_vk = $key;
                    }
                } else {
                    if(strcasecmp(trim($region_name['title']), $locality['name'])==0){
                        $count_city++;
                        $key_row_vk = $key;
                    }
                }
            }
            if($count_city==1){//Если мы нашли одно совпадение с контактом, то берем имя нашего региона из vk.com, а область из таблички 'locality'
                $new_region_name = trim($region_names_vk['response'][$key_row_vk]['title']);
                $find_vk_name_in_table = Region::find()
                    ->where(['name'=>$new_region_name, 'locality_id'=>$locality['locality_id']])
                    ->asArray()
                    ->limit(1)
                    ->one();
                if($find_vk_name_in_table!=[]){//Если мы таки нашли имя из vk.com в таблице, то берем его id
                    $model->region_id = $find_vk_name_in_table['region_id'];
                } else {//Если нет, то создаем новый регион
                    $new_region_id = $this->newRegion($new_region_name, $locality['locality_id']);
                    $model->region_id = $new_region_id;                            }

            } else {//Если мы не нашли такой области в ответе, который присылает vk.com, то создаем новый регион и область берем ту, которую нашли в табличке 'locality'
                $new_region_id = $this->newRegion($city_geo, $locality['locality_id']);
                $model->region_id = $new_region_id;
            }
        } else {//Если ответ от vk.com пустой, то создаем новый регион в найденной области
            $new_region_id = $this->newRegion($city_geo, $locality['locality_id']);
            $model->region_id = $new_region_id;
        }
    }
}