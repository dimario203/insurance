<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 1:01 PM
 */

namespace app\models\forms;


class FormData
{
    const OSAGO_POWER = [
        '0'=>'от 50 до 70 л.с.',
        '1'=>'от 71 до 100 л.с.',
        '2'=>'от 101 до 120 л.с.',
        '3'=>'от 121 до 150 л.с.',
        '4'=>'от 151 и выше л.с.'
    ];

    const LIVE_PRICE = [
        '0'=>'50 000 руб.',
        '1'=>'100 000 руб.',
        '2'=>'250 000 руб.',
        '3'=>'500 000 руб.',
        '4'=>'1 000 000 руб.',
        '5'=>'более 1 000 000 руб.'
    ];

    const REALTY_PRICE_REPAIR = [
        '0'=>'30 000 руб.',
        '1'=>'50 000 руб.',
        '2'=>'100 000 руб.',
        '3'=>'250 000 руб.',
        '4'=>'500 000 руб.',
        '5'=>'1 000 000 руб.',
        '6'=>'2 500 000 руб.',
        '7'=>'6 500 000 руб.',
        '8'=>'9 000 000 руб.',
    ];

    const TRAVEL_DURATION = [
        '0'=>7,
        '1'=>14,
        '2'=>30,
        '3'=>60,
        '4'=>90,
        '5'=>180,
        '6'=>360,
    ];

    const TRAVEL_AGE_GROUP = [
        '0'=>[0, 2],
        '1'=>[3, 64],
        '2'=>[65, 69],
        '3'=>[70, 500],
    ];

    const TRAVEL_SUMM_INSURED = [
        '0'=>35000,
        '1'=>50000,
        '2'=>100000,
    ];

    const LIVE_PAY_HOSPITAL =  [
        '0'=>'50 000 руб.',
        '1'=>'100 000 руб.',
        '2'=>'200 000 руб.',
        '3'=>'300 000 руб.',
        '4'=>'500 000 руб.',
    ];


    const LIVE_PAY_SURGEY =  [
        '0'=>'50 000 руб.',
        '1'=>'100 000 руб.',
        '2'=>'200 000 руб.',
        '3'=>'300 000 руб.',
        '4'=>'500 000 руб.',
    ];

    const LIVE_AGE_GROUP = [
        '0'=>[0, 2],
        '1'=>[3, 64],
        '2'=>[65, 69],
        '3'=>[70, 500],
    ];
    /**
     * @return array
     */
    public static function getOsagoPower(){
        return self::OSAGO_POWER;
    }

    /**
     * @return array
     */
    public static function getLivePrice(){
        return self::LIVE_PRICE;
    }

    /**
     * @return array
     */
    public static function getRealtyPriceRepair(){
        return self::REALTY_PRICE_REPAIR;
    }

    /**
     * @return array
     */
    public static function getTravelDurations(){
        return self::TRAVEL_DURATION;
    }

    /**
     * @return array
     */
    public static function getTravelAgeGroups(){
        return self::TRAVEL_AGE_GROUP;
    }

    /**
     * @return array
     */
    public static function getTravelSummInsurances(){
        return self::TRAVEL_SUMM_INSURED;
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getSummInsurance($id){
        $result = self::TRAVEL_SUMM_INSURED[1];
        if(isset(self::TRAVEL_SUMM_INSURED[$id])){
            $result = self::TRAVEL_SUMM_INSURED[$id];
        }
        return $result;
    }

    /**
     * @return array
     */
    public static function getPayHospital(){
        return self::LIVE_PAY_HOSPITAL;
    }


    /**
     * @return array
     */
    public static function getPaySurgey(){
        return self::LIVE_PAY_SURGEY;
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getLiveSummInsurance($id){
        $result = self::LIVE_PRICE[1];
        if(isset(self::LIVE_PRICE[$id])){
            $result = self::LIVE_PRICE[$id];
        }
        return $result;
    }


}