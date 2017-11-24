<?php

use yii\widgets\LinkPager;
use frontend\assets\PopperAsset;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */

PopperAsset::register($this);
$this->title = 'Epolis.shop';
?>
<div class="row">
    <div class="container">
        <div class="row pt-md-5">
            <div class="col-md-3">
                <div class="card bg-light border-0 modal-form-overlay">
                    <div class="card-header bg-red text-white rounded">
                        <div class="media">
                            <img class="logo-form-list" src="images/car.png">
                            <div class="media-body p-2">Страхование ОСАГО</div>
                            <span class="close-form-osago">x</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?=$region?></p>
                        <p class="card-text text-center small" id="edit-request"><a href="#">изменить запрос</a></p>
                        <hr>


                        <div class="form-osago-list none">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $form = ActiveForm::begin([
                                        'method'=>'post',
                                        'action'=>\yii\helpers\Url::to(['site/osago-list']),
                                        'id'=>'osago-form'
                                    ]) ?>
                                    <div class="form-group py-2">
                                        <label class="text-center font-weight-bold pb-2">Мощность двигателя</label>
                                        <?php
                                        echo $form->field($model, 'power')->dropDownList(
                                            $power,
                                            ['prompt'=>'Выберите мощность',
                                                'class' => 'form-control form-control-lg',
                                                /*'name'=>'power'*/]
                                        )->label(false);
                                        ?>
                                    </div>
                                    <div class="form-group py-2">
                                        <label class="text-center font-weight-bold pb-2">Регион регистрации</label>
                                        <?php
                                        echo $form->field($model, 'region')->dropDownList(
                                            $regions,
                                            ['prompt'=>'Выберите регион',
                                                'class' => 'form-control form-control-lg',
                                                /*'name'=>'region'*/]
                                        )->label(false);
                                        ?>
                                    </div>
                                    <div class="form-group py-2">
                                        <label class="font-weight-bold pb-2">Минимальный возраст</label>
                                        <div class="radio_buttons">
                                            <?php
                                            echo $form->field($model, 'min_age')->radioList(['1'=>'До 22 лет', '2'=>'Более 22 лет'], [

                                                'item' => function ($index, $label, $name, $checked, $value) {
                                                    $check = $value==1 ? 'checked' : '';
                                                    return "<div class=\"button-age\"><input type=\"radio\" name=\"$name\" id=\"radio$value\" value=\"$value\"$check><label for=\"radio$value\"> $label</label></div>";
                                                }])->label(false);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group py-2 min-experience">
                                        <label class="font-weight-bold pb-2">Минимальный стаж вождения</label>
                                        <div class="radio_buttons2">
                                            <?php
                                            echo $form->field($model, 'experience')->radioList(['1'=>'До 3 лет', '2'=>'Более 3 лет'], [

                                                'item' => function ($index, $label, $name, $checked, $value) {
                                                    $check = $value==1 ? 'checked' : '';
                                                    return "<div class=\"button-age\"><input type=\"radio\" name=\"$name\" id=\"radio".($value+2)."\" value=\"$value\"$check><label for=\"radio".($value+2)."\"> $label</label></div>";
                                                }])->label(false);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group py-2 form-buttons">
                                        <div class="form-row button-osago col-12" >
                                            <div class="col-12 col-xs-12" id="submit-1">
                                                <button type="submit" class="btn btn-red btn-lg btn-block ">
                                                    Предварительный расчет
                                                </button>
                                            </div>
                                            <div class="col-12 col-xs-12" id="submit-2">
                                                <button type="submit" class="btn btn-red btn-lg btn-block ">
                                                    Точный расчет
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end() ?>
                                </div>
                            </div>
                        </div>
                        <p class="card-text text-center small"><a href="#">отправить на email</a></p>
                    </div>
                </div>
                </br>
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <p class="card-text">Для оформления полиса обязательно:</p>
                        <dl class="dl-horizontal">
                            <dt><img src="images/check.svg"></dt>
                            <dd class="small">Наличие техосмотра или диагностической карты</dd>
                            <dt><img src="images/check.svg"></dt>
                            <dd class="small">Наличие водительского удостоверения</dd>
                            <dt><img src="images/check.svg"></dt>
                            <dd class="small">Наличие паспорта транспортного средства</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h2 class="font-weight-bold text-center">Предложения страховых фирм</h2>
                <?php
                if(isset($message) && !empty($message)){?>
                    </br>
                    </br>
                    <h4 class="text-center"><?=$message?></h4></br>
                <?php } ?>
                <?=$region_polis?>
                    <?php
                    if($another_region_polis != '') { ?>
                        <h4 class="text-center">По вашему запросу это все</h4></br>
                <div class="inactive-bloc">
                        <h4 class="text-center"><small>Ниже Вы видите полисы страховых компаний в других регионах</small></h4>
                        <?= $another_region_polis ?>
                </div>
                    <?php } ?>

                <div class="col-md-12 center-block">
                    <?=LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay-default"></div>



<?php
$script = <<<JS
$(document).ready(function(){
           $("#edit-request").click(function(){
               $('.form-osago-list').show();
               $('.overlay-default').show();
               $('.close-form-osago').show();
           });
           $(".close-form-osago").click(function(){
               $('.form-osago-list').hide();
               $('.overlay-default').hide();
               $('.close-form-osago').hide();
           });
           $(".overlay-default").click(function(){
               $('.form-osago-list').hide();
               $('.overlay-default').hide();
               $('.close-form-osago').hide();
           });
       })
JS;
$this->registerJs($script, View::POS_READY);
?>