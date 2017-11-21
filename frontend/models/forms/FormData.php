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

    public static function getOsagoPower(){
        return self::OSAGO_POWER;
    }

    public static function getLivePrice(){
        return self::LIVE_PRICE;
    }

    public static function getRealtyPriceRepair(){
        return self::REALTY_PRICE_REPAIR;
    }
}