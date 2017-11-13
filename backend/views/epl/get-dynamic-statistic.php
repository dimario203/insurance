<?php
use backend\assets\DiagramAsset;

DiagramAsset::register($this);
?>
<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li class="active">Динамика покупок</li>
</ul>
<h2 class="statistic-title">Динамика покупок</h2>
<div class="panel panel-default">
    <div class="panel-body">
        <div id="post-grid-pjax" class="statistic">
            <form id="statistic-form" method="post">
                <div class="settings">
                    <div class="statistic-polis">
                        <h4 class="message-polis">Выберите вид страховки</h4>
                        <div class="statistic-items-body">
                            <div class="checkbox">
                                <input class="statistic-input" type="checkbox" name="polis[osago]" value="1" checked/>
                                <label>ОСАГО</label>
                            </div>
                            <div class="checkbox">
                                <input class="statistic-input" type="checkbox" name="polis[travel]" value="2" checked/>
                                <label>Путешествия</label>
                            </div>
                            <div class="checkbox">
                               <input class="statistic-input" type="checkbox" name="polis[live]" value="3" checked/>
                                <label>Жизнь и Здоровье</label>
                            </div>
                            <div class="checkbox">
                                <input class="statistic-input" type="checkbox" name="polis[realty]" value="4" checked/>
                                <label>Недвижимость</label>
                            </div>
                            <div class="checkbox">
                                <input class="statistic-input" type="checkbox" name="polis[kasko]" value="5"/>
                                <label>КАСКО</label>
                            </div>
                        </div>
                    </div>
                    <div class="period">
                        <H4>Выберите период</H4>
                        <div class="statistic-items-period">
                            <sapn class="header-items">С какого</sapn>
                            <input type="text" name="date_in" class="tcal" value="" />
                        </div>
                        <div class="statistic-items-period">
                            <span class="header-items">По какой</span>
                            <input type="text" name="date_out" class="tcal" value="" />
                        </div>

                    </div>
                </div>
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <input class="button-ok btn btn-sm btn-primary" type="submit" value="Получить статистику"/>
            </form>
            <div id="container-diagram-dynamic"></div>
        </div>
    </div>
</div>


<?php
$this->registerJsFile(\yii\helpers\Url::toRoute(['/app/js/diagramDynamic.js']), ['depends'=>'yii\web\JqueryAsset', 'position' => yii\web\View::POS_END]);
?>

