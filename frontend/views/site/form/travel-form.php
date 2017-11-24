<?php

use yii\widgets\LinkPager;
use frontend\assets\PopperAsset;
use yii\web\View;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

PopperAsset::register($this);
$this->title = 'Epolis.shop';

?>
<div class="row header header-form-bg">
    <div class="container">
        <div class="row p-md-5">
            <div class="col col-md-10 offset-md-1 search-form">
                <div class="row py-md-5">
                    <div class="col-md-2 text-center d-none d-sm-none d-md-block">
                        <img src="images/earth-red.png">
                    </div>
                    <div class="col-md-9 text-center">
                        <h2 class="red font-weight-bold align-middle py-2">Страхование путешественников</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <?php
                        $form = ActiveForm::begin([
                            'method'=>'post',
                            'action'=>\yii\helpers\Url::to(['site/travel-list']),
                            'id'=>'travel-form'
                        ]) ?>
                            <div class="form-group py-2">
                                <label for="countries" class="text-center font-weight-bold pb-2">Выберите страну</label>
                                <?php
                                echo $form->field($model, 'country')->dropDownList(
                                    $countries,
                                    ['prompt'=>'Куда едем?',
                                     'class' => 'form-control form-control-lg',
                                     //'name'=>'country'
                                    ]
                                )->label(false);
                                ?>
                            </div>
                            <label class="text-center font-weight-bold pb-2">Укажите даты поездки</label>
                            <div class="form-row">
                                <div class="form-group col-6 py-2 px-0">
                                    <?php
                                    echo $form->field($model, 'date_from')->textInput(
                                        ['class' => 'form-control form-control-lg datepicker date-from',
                                         //'name'=>'date-from',
                                         'placeholder'=>"Туда" ]
                                    )->label(false);
                                    ?>
                                </div>
                                <div class="form-group col-6 py-2 px-0">
                                    <?php
                                    echo $form->field($model, 'date_to')->textInput(
                                        ['class' => 'form-control form-control-lg datepicker date-from',
                                            //'name'=>'date-to',
                                            'placeholder'=>"Обратно" ]
                                    )->label(false);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <label for="birthdays" class="text-center font-weight-bold pb-2">Дата рождения путешественников</label>
                                <?php
                                echo $form->field($model, 'birth')->textInput(
                                    ['class' => 'form-control form-control-lg datepicker date-birth',
                                        'id'=>'birthdays',
                                        //'name'=>'birth',
                                        'placeholder'=>"Укажите дату" ]
                                )->label(false)->error(false);
                                ?>

                                <button type="button" class="btn btn-outline-secondary ml-1" id="add-user"><img
                                            src="images/+icon.png"></button>
                            </div>
                            <div class="row">
                                <div class="col-10 offset-1 pb-5">
                                    <button type="submit" class="btn btn-red btn-lg btn-block font-weight-bold ">
                                        Найти страховку
                                    </button>
                                </div>
                            </div>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row content-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h2 class="red text-uppercase font-weight-bold">Страхование выезжающих за рубеж</h2>
            </div>
            <div class="col-12 text-center pt-3">
                <img src="images/triangle-red.png">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="row text-secondary">
                    <div class="col-12">
                        <h2 class="text-uppercase font-size-3 font-weight-bold">Помощь по онлайн страхованию</h2>
                        <img src="images/triangle.png">
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                        <div class="pt-4">
                            <h6 class="m-0 font-weight-bold">Является ли полис, купленный в интернете подлинным?</h6>
                            <hr class="m-1 hr-half-red">
                            <p class="m-0">Безусловно. Полисы выезжающих за рубеж уже более 5 лет успешно продаются в Интернете. Его достаточно даже предъявить на телефоне, но, рекомендуем, распечатать и положить в заграничный паспорт.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-secondary">
                <div class="row border-right-0 top-to-bottom-70 pl-3">
                    <p>Выезжающим за рубеж обычно нужно купить туристическую страховку. Такая страховка обеспечивает защиту здоровья и имущества путешественников.</p>
                    <p>Оформив туристическую страховку вы получите:</p>
                    <ul>
                        <li>срочную медицинскую помощь и компенсацию медицинских расходов</li>
                        <li>компенсацию стоимости багажа в случае его порси или утраты</li>
                        <li>компенсацию убытков при отмене или переносе поездки</li>
                        <li>другие компенсации, оговоренные страхователем</li>
                    </ul>
                    <p>Вы можете оформить туристическую страховку онлайн на нашем сайте и получить полис себе на электронною почту за 5 минут.</p>
                </div>
                <h2 class="text-uppercase font-size-3 font-weight-bold pt-3">Наши партнеры</h2>
            </div>
        </div>
    </div>
</div>

<?php

$script = <<<JS
$(document).ready(function(){
    $('.date-birth').datepicker({
        format: "mm/dd/yyyy",
        language: "ru",
        multidate: true,
        multidateSeparator: ",",
        clearBtn: true,
        autoclose: true, 
        startView: 3,
    });
    $('.date-from').datepicker({
        todayBtn: "linked",
        format: "mm/dd/yyyy",
        language: "ru",
        autoclose: true,    
    });
    $('.date-to').datepicker({
        todayBtn: "linked",
        format: "mm/dd/yyyy",
        language: "ru",
        autoclose: true,    
    });
});
JS;
$this->registerJs($script, View::POS_READY);
?>