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
                                <img class="logo-form-list" src="images/earth.png">
                                <div class="media-body p-2">Страхование путешественников</div>
                                <span class="close-form-live">x</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Возраст страхуемого: <?= $age ?></p>
                            <p class="card-text">Сумма: <?= $summ_insurance ?></p>
                            <p class="card-text text-right small" id="edit-request"><a href="#">изменить запрос</a></p>
                            <hr>

                            <?php
                            $form = ActiveForm::begin([
                                'method' => 'post',
                                'action' => \yii\helpers\Url::to(['site/live-list']),
                                'id' => 'live-form'
                            ]) ?>
                            <div class="form-live-list none">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="form-group py-2">
                                            <label for="countries" class="text-center font-weight-bold pb-2">Возраст
                                                страхуемого</label>
                                            <?php
                                            echo $form->field($model, 'age')->textInput(
                                                [
                                                    'type' => 'number',
                                                    'class' => 'form-control form-control-lg',
                                                    //'name'=>'age',
                                                    'placeholder' => "от 1 до 75 лет"]
                                            )->label(false);
                                            ?>
                                        </div>
                                        <div class="form-group py-2">
                                            <label for="prices" class="text-center font-weight-bold pb-2">Страховая
                                                сумма</label>
                                            <?php
                                            echo $form->field($model, 'summa')->dropDownList(
                                                $all_summ_insurance,
                                                ['prompt' => 'Выберите сумму',
                                                    'class' => 'form-control form-control-lg',
                                                    //'name'=>'summa'
                                                ]
                                            )->label(false);
                                            ?>
                                        </div>
                                        <div class="form-group py-2">
                                            <?php
                                            echo $form->field($model, 'worked')
                                                ->checkbox([
                                                    'label' => 'Застрахованный работает',
                                                    //'name'=>'work',
                                                    'checked' => true,
                                                    'value' => 1,
                                                ])->error(false);
                                            ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 offset-1 pb-5">
                                                <button type="submit"
                                                        class="btn btn-red btn-lg btn-block font-weight-bold  text-center button-form-list">
                                                    Найти страховку
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="additional-payd">
                                <p class="card-text">Выплата при госпитализации</p>
                                <?php
                                echo $form->field($model, 'pay_hospital')->dropDownList(
                                    $all_pay_hospital,
                                    ['prompt' => 'Выберите сумму страховки',
                                        'class' => 'form-control form-control-lg result-select bg-white mb-2',
                                    ]
                                )->label(false);
                                ?>

                                <p class="card-text">Выплата в случае хирургической операции</p>
                                <?php
                                echo $form->field($model, 'pay_surgery')->dropDownList(
                                    $all_pay_surgey,
                                    ['prompt' => 'Выберите сумму страховки',
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
               $('.form-live-list').show();
               $('.overlay-default').show();
               $('.close-form-live').show();
               $('.additional-payd').hide();
           });
           $(".close-form-live").click(function(){
               $('.form-live-list').hide();
               $('.overlay-default').hide();
               $('.close-form-live').hide();
               $('.additional-payd').show();
           });
           $(".overlay-default").click(function(){
               $('.form-live-list').hide();
               $('.overlay-default').hide();
               $('.close-form-live').hide();
               $('.additional-payd').show();
           });           
       })
JS;
$this->registerJs($script, View::POS_READY);
?>