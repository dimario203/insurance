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
            <?php
            if($status == 'error'){?>
            <div class="row pt-md-5">
                <div class="col-md-12">
                    <h3 class="font-weight-bold text-center"><?=$message?></h3>
                </div>
            </div>
            <?php
            } else {
                ?>
                <div class="row pt-md-5">
                    <div class="col-md-3">
                        <div class="card bg-light border-0 modal-form-overlay">
                            <div class="card-header bg-red text-white rounded">
                                <div class="media">
                                    <img class="logo-form-list" src="images/home.png">
                                    <div class="media-body p-2">Страхование недвижимости</div>
                                    <span class="close-form-realty">x</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $region ?>,</p>
                                <p class="card-text">Сумма: <?= $summ_insurance ?></p>
                                <p class="card-text text-right small" id="edit-request"><a href="#">изменить запрос</a>
                                </p>
                                <hr>

                                <?php
                                $form = ActiveForm::begin([
                                    'method' => 'post',
                                    'action' => \yii\helpers\Url::to(['site/realty-list']),
                                    'id' => 'realty-form'
                                ]) ?>
                                <div class="form-realty-list none">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <div class="form-group py-2">
                                                <label for="countries" class="text-center font-weight-bold pb-2">Выберите
                                                    город</label>
                                                <?php
                                                echo $form->field($model, 'region')->dropDownList(
                                                    $regions,
                                                    ['prompt' => 'Выберите город',
                                                        'class' => 'form-control form-control-lg',
                                                        //'name'=>'region'
                                                    ]
                                                )->label(false);
                                                ?>
                                            </div>
                                            <div class="form-group py-2">
                                                <label for="countries" class="text-center font-weight-bold pb-2">Внутренняя
                                                    отделка</label>
                                                <?php
                                                echo $form->field($model, 'repair_price')->dropDownList(
                                                    $all_realty_price_repair,
                                                    ['prompt' => 'Выберите сумму',
                                                        'class' => 'form-control form-control-lg',
                                                        'id' => 'all_realty_price_repair'
                                                    ]
                                                )->label(false);
                                                ?>
                                            </div>
                                            <div class="form-group py-2">
                                                <?php
                                                echo $form->field($model, 'lease')
                                                    ->checkbox([
                                                        'label' => 'Квартира сдается в аренду',
                                                        //'name'=>'lease',
                                                    ])->error(false);
                                                ?>
                                            </div>
                                            <div class="row">
                                                <div class="col-10 offset-1 pb-5">
                                                    <button type="submit"
                                                            class="btn btn-red btn-lg btn-block font-weight-bold ">
                                                        Найти страховку
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="additional-payd">
                                    <p class="card-text">Внутренняя отделка</p>
                                    <?php
                                    echo $form->field($model, 'repair_price')->dropDownList(
                                        $all_realty_price_repair,
                                        ['prompt' => 'Выберите сумму',
                                            'class' => 'form-control form-control-lg result-select bg-white mb-2',
                                            'id' => 'all_realty_price_repair'
                                        ]
                                    )->label(false);
                                    ?>

                                    <p class="card-text">Конструкция квартиры</p>
                                    <?php
                                    echo $form->field($model, 'constraction_price')->dropDownList(
                                        $all_realty_price_constraction,
                                        ['prompt' => 'Выберите сумму',
                                            'class' => 'form-control form-control-lg result-select bg-white mb-2',
                                        ]
                                    )->label(false);
                                    ?>

                                    <p class="card-text">Гражданская ответственность</p>
                                    <?php
                                    echo $form->field($model, 'civil_resp')->dropDownList(
                                        $all_realty_price_civil_resp,
                                        ['prompt' => 'Выберите сумму',
                                            'class' => 'form-control form-control-lg result-select bg-white mb-2',
                                        ]
                                    )->label(false);
                                    ?>

                                    <button type="submit" class="btn btn-red btn-lg btn-block my-3">
                                        Пересчитать
                                    </button>

                                    <p class="card-text text-center small"><a href="#">отправить на email</a></p>
                                </div>

                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2 class="font-weight-bold text-center">Предложения страховых фирм</h2>
                        <?php
                        if (isset($message) && !empty($message)) {
                            ?>
                            </br>
                            </br>
                            <h4 class="text-center"><?= $message ?></h4></br>
                        <?php } ?>
                        <?= $live_polis ?>
                        <h4 class="text-center">По вашему запросу это все</h4></br>

                        <div class="col-md-12 center-block">
                            <?= LinkPager::widget([
                                'pagination' => $pages,
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
                ?>
        </div>
    </div>

    <div class="overlay-default"></div>

    <style>
        .additional-payd{
            z-index: 5;
        }
    </style>

<?php
$script = <<<JS
$(document).ready(function(){
           $("#edit-request").click(function(){
               $('.form-realty-list').show();
               $('.overlay-default').show();
               $('.close-form-realty').show();
               $('.additional-payd').hide();
           });
           $(".close-form-realty").click(function(){
               $('.form-realty-list').hide();
               $('.overlay-default').hide();
               $('.close-form-realty').hide();
               $('.additional-payd').show();
           });
           $(".overlay-default").click(function(){
               $('.form-realty-list').hide();
               $('.overlay-default').hide();
               $('.close-form-realty').hide();
               $('.additional-payd').show();
           });           
       })
JS;
$this->registerJs($script, View::POS_READY);
?>