<?php

use yii\widgets\LinkPager;
use yii\web\View;

/* @var $this yii\web\View */

$this->title = 'Epolis.shop';
?>

    <div class="row header header-home-bg">
        <div class="container">
            <div class="row py-5">
                <div class="media col-12 col-md-10 offset-md-1">
                    <img src="images/logo-2.png" class="d-none d-sm-none d-md-block mx-auto">
                    <div class="media-body text-center slogan">
                        Онлайн <span class="font-weight-bold">поиск по страхованию</span>
                    </div>
                </div>
            </div>
            <div class="row py-5 d-none d-sm-none d-md-block">
                <div class="col-12">
                    <div class="card-deck text-center">
                        <?= $polises ?>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled d-block d-sm-block d-md-none">
                <li class="media">
                    <img class="m-2 align-self-center" src="images/car.png ">
                    <div class="media-body align-self-center ml-3">
                        <h5 class="mt-0 mb-1">ОСАГО</h5>
                    </div>
                </li>
                <li class="media my-2">
                    <img class="m-2 align-self-center" src="images/earth.png">
                    <div class="media-body align-self-center ml-3">
                        <h5 class="mt-0 mb-1">ПУТЕШЕСТВИЯ</h5>
                    </div>
                </li>
                <li class="media my-2">
                    <img class="m-2 align-self-center" src="images/heart.png">
                    <div class="media-body align-self-center ml-3">
                        <h5 class="mt-0 mb-1">ЗДОРОВЬЕ И ЖИЗНЬ</h5>
                    </div>
                </li>
                <li class="media my-2">
                    <img class="m-2 align-self-center" src="images/home.png">
                    <div class="media-body align-self-center ml-3">
                        <h5 class="mt-0 mb-1">НЕДВИЖИМОСТЬ</h5>
                    </div>
                </li>
                <li class="media">
                    <img class="m-2 align-self-center" src="images/car2.png">
                    <div class="media-body align-self-center ml-3">
                        <h5 class="mt-0 mb-1">КАСКО</h5>
                    </div>
                </li>
            </ul>

            <div class="row pt-5 justify-content-md-center d-none d-sm-none d-md-block">
                <div class="col text-center">
                    <img src="images/mouse.png">
                    <div class="row">
                        <div class="col-1 offset-6 vl-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row content-bg">
        <div class="container">
            <div class="row pt-0 justify-content-md-center d-none d-sm-none d-md-block">
                <div class="col text-center">
                    <div class="row">
                        <div class="col-1 offset-6 vl-red"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center pt-5">
                    <h4 class="red text-uppercase">Почему <span class="font-weight-bold">мы?</span></h4>
                </div>
                <div class="col-12 text-center pt-3">
                    <img src="images/triangle-red.png">
                </div>
                <div class="col-12 text-center pt-5">
                    <h4 class="font-weight-light text-secondary mb-5">Наши Преимущества</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row text-secondary">
                        <div class="col-12">
                            <h2 class="text-uppercase font-size-3"><span
                                        class="font-weight-bold">Облегчите свою жизнь</span><br>
                                с&nbsp;epolis.shop</h2>
                            <p class="py-1">Выберите вид страхования<br> Спите спокойно!</p>
                            <img src="images/triangle.png">
                            <div class="pt-4 font-weight-bold">
                                <p class="m-0"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    Простота Использования</p>
                                <hr class="m-1" style="width: 100px;">
                                <p class="m-0"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    Полностью Бесплатно</p>
                                <hr class="m-1" style="width: 130px;">
                                <p class="m-0"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    Большой Выбор Страховок</p>
                                <hr class="m-1" style="width: 160px;">
                                <p class="m-0"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    Надежная Компания</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5 offset-md-2 border-top-0 border-left-0 left-to-right">
                            <div class="text-md-right text-secondary p-3">
                                <img src="images/ilst-icon.png" class="pb-2">
                                <h4 class="text-uppercase font-weight-bold py-3">Удобно</h4>
                                Все виды страхования в одном месте. Позволяем сравнить цены на страховки онлайн
                            </div>
                        </div>
                        <div class="col-md-5 border-top-0 border-right-0 top-to-bottom">
                            <div class="p-3 text-secondary">
                                <img src="images/speed_icon.png" class="pb-2">
                                <h4 class="text-uppercase font-weight-bold py-3">быстро</h4>
                                Без пробок и очередей. Вы покупаете страховку онлайн, а полис с подписью и печатью
                                получаете на почту
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-2 border-bottom-0 border-left-0 bottom-to-top">
                            <div class="text-md-right text-secondary p-3">
                                <img src="images/money-icon.png" class="py-2">
                                <h4 class="text-uppercase font-weight-bold py-3">выгодно</h4>
                                Мы сортируем все предложения онлайн и показываем в первую очередь, самую
                                привлекательную цену
                            </div>
                        </div>
                        <div class="col-md-5 border-bottom-0 border-right-0 right-to-left">
                            <div class="text-secondary p-3">
                                <img src="images/baloons-icon.png" class="py-2">
                                <h4 class="text-uppercase font-weight-bold py-3">5 лет на рынке</h4>
                                Мы помагаем народу уже несколько лет. Стабильная работа и проффесионализм
                                гарантируемые
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$path_osago = \yii\helpers\Url::to(['site/osago-form'], true);
$path_travel = \yii\helpers\Url::to(['site/travel-form'], true);
$path_live = \yii\helpers\Url::to(['site/live-form'], true);
$path_realty = \yii\helpers\Url::to(['site/realty-form'], true);
$path_kasko = \yii\helpers\Url::to(['site/kasko-form'], true);
$script = <<<JS
 $('#card-osago').click(function () {                
                window.location.href = "$path_osago";
            });
 $('#card-travel').click(function () {                
                window.location.href = "$path_travel";
            });
 $('#card-live').click(function () {                
                window.location.href = "$path_live";
            });
 $('#card-realty').click(function () {                
                window.location.href = "$path_realty";
            });
 $('#card-kasko').click(function () {                
                window.location.href = "$path_kasko";
            });
JS;
$this->registerJs($script, View::POS_READY);
?>


<?php
$this->registerJsFile(\yii\helpers\Url::toRoute(['/js/for_index.js']), ['depends' => 'yii\web\JqueryAsset', 'position' => yii\web\View::POS_END]);
?>