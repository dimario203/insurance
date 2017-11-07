<?php
use kartik\select2\Select2;
use backend\assets\DiagramAsset;

DiagramAsset::register($this);
?>

<div id="statistic">
    <h2 class="statistic-title">Статистика покупок по регионам</h2>
    <form id="statistic-form" method="post">
        <div class="settings">
            <div class="statistic-polis">
                <div class="statistic-polis-header">
                    <h4 class="message-polis">Выберите вид страховки</h4>
                </div>
                <div class="statistic-items-body">
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="polis[osago]" value="1" checked/>
                         ОСАГО
                    </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="polis[travel]" value="2" checked/>
                        Путишествия
                    </span>
                   <span class="statistic-items">
                       <input class="statistic-input" type="checkbox" name="polis[live]" value="3" checked/>
                       Жизнь и Здоровье
                   </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="polis[realty]" value="4" checked/>
                        Недвижимость
                    </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="polis[kasko]" value="5"/>
                        КАСКО
                    </span>
                </div>
            </div>
            <div class="region-company">
                <div class="statistic-polis-header">
                    <h4 class="message-region">Выберите регион</h4>
                </div>
                <div class="statistic-items-region">
                    <?php
                    echo Select2::widget([
                        'name' => 'region',
                        'language' => 'ru',
                        'value' => '',
                        'data' => $regions,
                        'theme' => Select2::THEME_KRAJEE,
                        'options' => ['multiple' => true, 'placeholder' => 'Выберте регионы ...'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <div class="period">
                <div class="statistic-polis-header">
                    <H4>Выберите период</H4>
                </div>
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
        <input class="button-ok" type="submit" value="Получить статистику"/>
    </form>
    <div id="container-diagram"></div>
</div>

<?php
$this->registerJsFile(\yii\helpers\Url::toRoute(['/app/js/diagramRegion.js']), ['depends'=>'yii\web\JqueryAsset', 'position' => yii\web\View::POS_END]);
?>

