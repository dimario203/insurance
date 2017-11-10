<?php
use kartik\select2\Select2;
use backend\assets\DiagramAsset;

DiagramAsset::register($this);
?>
<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li class="active">Статистика по компаниям</li>
</ul>
<h3 class="statistic-title">Статистика покупок по компаниям</h3>
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
                    <div class="region-company">
                        <h4 class="message-companies">Выберите Компанию</h4>
                        <div class="statistic-items-region">
                            <?php
                            echo Select2::widget([
                                'name' => 'companies',
                                'language' => 'ru',
                                'value' => '',
                                'data' => $companies,
                                'theme' => Select2::THEME_KRAJEE,
                                'options' => ['multiple' => true, 'placeholder' => 'Выберте компании ...'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="period">
                        <H4>Выберите период</H4>
                        <div class="statistic-items-period">
                            <sapn class="header-items">С какого</sapn>
                            <input type="text" name="date_in" class="tcal" value=""/>
                        </div>
                        <div class="statistic-items-period">
                            <span class="header-items">По какой</span>
                            <input type="text" name="date_out" class="tcal" value=""/>
                        </div>
                    </div>
                </div>
                <input class="button-ok btn btn-sm btn-primary" type="submit" value="Получить статистику"/>
            </form>
            <div id="container-diagram"></div>
        </div>
    </div>
</div>


<?php
$this->registerJsFile(\yii\helpers\Url::toRoute(['/app/js/diagramCompany.js']), ['depends'=>'yii\web\JqueryAsset', 'position' => yii\web\View::POS_END]);
?>

