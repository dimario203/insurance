<?php

use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'Epolis.shop';
?>
<div class="row">
    <div class="container">
        <div class="row pt-5">
            <div class="col-3">
                <div class="card bg-light border-0">
                    <div class="card-header bg-red text-white rounded">
                        <div class="media">
                            <img src="images/earth.png">
                            <div class="media-body p-2">Страхование путешественников</div>
                        </div>
                    </div>
                    <form id="form-travel-list">
                        <div class="card-body">
                            <p class="card-text">Юго Восточная Азия</p>
                            <p class="card-text">Сумма: 50 000€</p>
                            <p class="card-text text-right small"><a href="#">изменить запрос</a></p>
                            <p class="card-text">Сумма страховки:</p>

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

                            <p class="card-text text-center small"><a href="#">отправить на email</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <h2 class="font-weight-bold">Предложения страховых фирм</h2>
                <div class="card bg-light border-0 my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 text-center py-3">
                                        <img src="http://placehold.it/150x50">
                                    </div>
                                    <div class="col-6"><p class="text-center small"><a href="#">сравнить</a></p></div>
                                    <div class="col-6"><p class="text-center small"><a href="#">Что включено</a></p></div>
                                </div>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <p>Сумма страховки</p>
                                <p><span class="font-weight-bold">50 000 €</span></p>
                                <p>Тип полиса</p>
                                <p><span class="font-weight-bold">Базовый</span></p>
                            </div>
                            <div class="col-4">
                                <p>Цена полиса</p>
                                <p><span class="font-weight-bold">1 021 Руб.</span></p>
                                <button type="submit" class="btn btn-red btn-lg btn-block my-3">
                                    Оформить полис
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light border-0 my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 text-center py-3">
                                        <img src="http://placehold.it/150x50">
                                    </div>
                                    <div class="col-6"><p class="text-center small"><a href="#">сравнить</a></p></div>
                                    <div class="col-6"><p class="text-center small"><a href="#">Что включено</a></p></div>
                                </div>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <p>Сумма страховки</p>
                                <p><span class="font-weight-bold">50 000 €</span></p>
                                <p>Тип полиса</p>
                                <p><span class="font-weight-bold">Базовый</span></p>
                            </div>
                            <div class="col-4">
                                <p>Цена полиса</p>
                                <p><span class="font-weight-bold">1 021 Руб.</span></p>
                                <button type="submit" class="btn btn-red btn-lg btn-block my-3">
                                    Оформить полис
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-light border-0 my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12 text-center py-3">
                                        <img src="http://placehold.it/150x50">
                                    </div>
                                    <div class="col-6"><p class="text-center small"><a href="#">сравнить</a></p></div>
                                    <div class="col-6"><p class="text-center small"><a href="#">Что включено</a></p></div>
                                </div>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <p>Сумма страховки</p>
                                <p><span class="font-weight-bold">50 000 €</span></p>
                                <p>Тип полиса</p>
                                <p><span class="font-weight-bold">Базовый</span></p>
                            </div>
                            <div class="col-4">
                                <p>Цена полиса</p>
                                <p><span class="font-weight-bold">1 021 Руб.</span></p>
                                <button type="submit" class="btn btn-red btn-lg btn-block my-3">
                                    Оформить полис
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>