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
                            <img src="images/earth.png">
                            <div class="media-body p-2">Страхование путешественников</div>
                            <span class="close-form-travel">x</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?=$country_name?></p>
                        <p class="card-text">Сумма: <?=$summ_insuranse?> €</p>
                        <p class="card-text text-right small" id="edit-request"><a href="#">изменить запрос</a></p>
                        <hr>


                        <?php
                        $form = ActiveForm::begin([
                            'method'=>'post',
                            'action'=>\yii\helpers\Url::to(['site/travel-list']),
                            'id'=>'travel-form'
                        ]) ?>
                        <div class="form-travel-list none">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">

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

                                </div>
                            </div>
                        </div>


                        <div class="additional-payd">
                            <p class="card-text">Сумма страховки:</p>
                            <?php
                            echo $form->field($model, 'summ')->dropDownList(
                                $all_summ_insurance,
                                ['prompt'=>'Выберите сумму страховки',
                                    'class' => 'form-control form-control-lg result-select bg-white mb-2',
                                    'id' => "euro"
                                ]
                            )->label(false);
                            ?>
                            <?php
                            foreach($types_additional_payd as $key=>$payd){?>
                                <label class="result-control result-radio">
                                    <?php
                                    echo $form->field($model, "additional_payd[$key]", ['template' => "<span class=\"result-control-indicator\"></span>{input}<span class=\"result-control-indicator\"></span> <span class=\"result-control-description\">$payd</span>"])
                                        ->checkbox([
                                                'class'=>'result-control-input',
                                        ], false)->label(false)->error(false);
                                    ?>
                                </label>
                            <?php
                            }  ?>
                            <label class="result-control result-radio">
                                <?php
                                echo $form->field($model, "travel_accident", ['template' => "<span class=\"result-control-indicator\"></span>{input}<span class=\"result-control-indicator\"></span> <span class=\"result-control-description\">Несчастный случай</span>"])
                                    ->checkbox([
                                        'class' => 'result-control-input',
                                    ], false)->label(false)->error(false);
                                ?>
                            </label>
                            <label class="result-control result-radio">
                                <?php
                                echo $form->field($model, "civil_responsibility", ['template' => "<span class=\"result-control-indicator\"></span>{input}<span class=\"result-control-indicator\"></span> <span class=\"result-control-description\">Гражданская ответственность</span>"])
                                    ->checkbox([
                                        'class' => 'result-control-input',
                                    ], false)->label(false)->error(false);
                                ?>
                            </label>

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
                <?= $country_polis ?>
                <h4 class="text-center">По вашему запросу это все</h4></br>

                <div class="col-md-12 center-block">
                    <?= LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </div>
            </div>
        </div>
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
               $('.form-travel-list').show();
               $('.overlay-default').show();
               $('.close-form-travel').show();
               $('.additional-payd').hide();
           });
           $(".close-form-travel").click(function(){
               $('.form-travel-list').hide();
               $('.overlay-default').hide();
               $('.close-form-travel').hide();
               $('.additional-payd').show();
           });
           $(".overlay-default").click(function(){
               $('.form-travel-list').hide();
               $('.overlay-default').hide();
               $('.close-form-travel').hide();
               $('.additional-payd').show();
           });
           $('.date-birth').datepicker({
                format: "mm/dd/yyyy",
                language: "ru",
                multidate: true,
                multidateSeparator: ",",
                clearBtn: true,
                autoclose: true, 
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
       })
JS;
$this->registerJs($script, View::POS_READY);
?>