<?php

use yii\widgets\LinkPager;
use frontend\assets\PopperAsset;

/* @var $this yii\web\View */

PopperAsset::register($this);
$this->title = 'Epolis.shop';
?>
<div class="row">
    <div class="container">
        <div class="row pt-md-5">
            <div class="col-md-3">
                <div class="card bg-light border-0">
                    <div class="card-header bg-red text-white rounded">
                        <div class="media">
                            <img src="images/car.png">
                            <div class="media-body p-2">Страхование ОСАГО</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?=$region?></p>
                        <p class="card-text text-center small"><a href="#">изменить запрос</a></p>
                        <hr>


                        <div style="display: none">
                        <select class="form-control form-control-lg result-select bg-white mb-2" id="euro">
                            <option>50 000€</option>
                            <option>50 001€</option>
                            <option>50 002€</option>
                        </select>

                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Отмена поездки</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Задержка авиарейса</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Отмена поездки</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Задержка авиарейса</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Отмена поездки</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Задержка авиарейса</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Отмена поездки</span>
                        </label>
                        <label class="result-control result-radio">
                            <input name="radio" type="radio" class="result-control-input">
                            <span class="result-control-indicator"></span>
                            <span class="result-control-description">Задержка авиарейса</span>
                        </label>

                        <button type="submit" class="btn btn-red btn-lg btn-block my-3">
                            Пересчитать
                        </button>
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