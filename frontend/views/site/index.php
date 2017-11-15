<?php

use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Epolis.shop';
?>
<div class="row header header-home-bg">
    <video autoplay loop muted poster="screenshot.jpg" id="header-home-bg" class="d-sm-none d-md-block">
        <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
    </video>
    <!--<div class="embed-responsive embed-responsive-16by9 d-sm-none d-md-block" id="header-home-bg">-->
    <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"-->
    <!--allowfullscreen></iframe>-->
    <!--</div>-->

    <!--<div class="embed-responsive embed-responsive-16by9 d-sm-none d-md-block" id="header-home-bg">-->
    <!--<iframe src="https://player.vimeo.com/video/184806529" width="640" height="360" frameborder="0"-->
    <!--webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
    <!--</div>-->

    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center">
                <img src="images/logo-2.png"> <span class="text-white align-middle pl-5"
                                                    style="font-size: 3rem;">Онлайн <span
                            class="font-weight-bold">поиск по страхованию</span></span>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <div class="card-deck text-center">
                    <div class="card border-0 mx-2">
                        <div class="card-body">
                            <div class="mt-5 card-images align-middle">
                                <img src="images/car.png" class="inactive">
                                <img src="images/car-red.png" class="active">
                            </div>
                            <h5 class="card-title">ОСАГО</h5>
                        </div>
                        <div class="card-footer border-0">
                            ИСКАТЬ
                        </div>
                    </div>
                    <div class="card border-0 mx-2">
                        <div class="card-body">
                            <div class="mt-5 card-images align-middle">
                                <img src="images/earth.png" class="inactive">
                                <img src="images/earth-red.png" class="active">
                            </div>
                            <h5 class="card-title">ПУТЕШЕСТВИЯ</h5>
                        </div>
                        <div class="card-footer border-0">
                            ИСКАТЬ
                        </div>
                    </div>
                    <div class="card border-0 mx-2">
                        <div class="card-body">
                            <div class="mt-5 card-images align-middle">
                                <img src="images/heart.png" class="inactive">
                                <img src="images/heart-red.png" class="active">
                            </div>
                            <h5 class="card-title">ЗДОРОВЬЕ И ЖИЗНЬ</h5>
                        </div>
                        <div class="card-footer border-0">
                            ИСКАТЬ
                        </div>
                    </div>
                    <div class="card border-0 mx-2">
                        <div class="card-body">
                            <div class="mt-5 card-images align-middle">
                                <img src="images/home.png" class="inactive">
                                <img src="images/home-red.png" class="active">
                            </div>
                            <h5 class="card-title">НЕДВИЖИМОСТЬ</h5>
                        </div>
                        <div class="card-footer border-0">
                            ИСКАТЬ
                        </div>
                    </div>
                    <div class="card border-0 mx-2">
                        <div class="card-body">
                            <div class="mt-5 card-images align-middle">
                                <img src="images/car2.png" class="inactive">
                                <img src="images/car2-new.png" class="active">
                            </div>
                            <h5 class="card-title">КАСКО</h5>
                        </div>
                        <div class="card-footer border-0">
                            ИСКАТЬ
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 justify-content-md-center">
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
        <div class="row pt-0 justify-content-md-center">
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
            <div class="col-4">
                <div class="row text-secondary">
                    <div class="col-12">
                        <h2 class="text-uppercase font-size-3"><span class="font-weight-bold">Облегчите свою жизнь</span><br>
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
            <div class="col-8">
                <div class="row">
                    <div class="col-5 offset-2 border-top-0 border-left-0 left-to-right">
                        <div class="text-right text-secondary p-3">
                            <img src="images/ilst-icon.png" class="pb-2">
                            <h4 class="text-uppercase font-weight-bold py-3">Удобно</h4>
                            Все виды страхования в одном месте. Позволяем сравнить цены на страховки онлайн
                        </div>
                    </div>
                    <div class="col-5 border-top-0 border-right-0 top-to-bottom">
                        <div class="p-3 text-secondary">
                            <img src="images/speed_icon.png" class="pb-2">
                            <h4 class="text-uppercase font-weight-bold py-3">быстро</h4>
                            Без пробок и очередей. Вы покупаете страховку онлайн, а полис с подписью и печатью
                            получаете на почту
                        </div>
                    </div>
                    <div class="col-5 offset-2 border-bottom-0 border-left-0 bottom-to-top">
                        <div class="text-right text-secondary p-3">
                            <img src="images/money-icon.png" class="py-2">
                            <h4 class="text-uppercase font-weight-bold py-3">выгодно</h4>
                            Мы сортируем все предложения онлайн и показываем в первую очередь, самую
                            привлекательную цену
                        </div>
                    </div>
                    <div class="col-5 border-bottom-0 border-right-0 right-to-left">
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
$this->registerJsFile(\yii\helpers\Url::toRoute(['/js/for_index.js']), ['depends'=>'yii\web\JqueryAsset', 'position' => yii\web\View::POS_END]);
?>