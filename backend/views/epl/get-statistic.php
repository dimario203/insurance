<div id="statistic">
    <form method="post" action="<?= \yii\helpers\Url::toRoute(['epl/get-statistic'])?>">
        <div class="settings">
            <div class="statistic-polis">
                <div class="statistic-polis-header">
                    <H4>Выберите вид страховки</H4>
                </div>
                <div class="statistic-items-body">
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="osago" value="1" checked/>
                         ОСАГО
                    </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="travel" value="1" checked/>
                        Путишествия
                    </span>
                   <span class="statistic-items">
                       <input class="statistic-input" type="checkbox" name="live" value="1" checked/>
                       Жизнь и Здоровье
                   </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="realty" value="1" checked/>
                        Недвижимость
                    </span>
                    <span class="statistic-items">
                        <input class="statistic-input" type="checkbox" name="kasko" value="1"/>
                        КАСКО
                    </span>
                </div>
            </div>
            <div class="region-company">
                <div class="statistic-polis-header">
                    <H4>Выберите параметры</H4>
                </div>
                <div class="statistic-items-region">
                    <span class="header-items">По регионам</span>
                    <input type="checkbox" name="company_id" checked value="1"/>
                    <select name="region_id">

                    </select>
                </div>
                <div class="statistic-items-region">
                    <span class="header-items">По компаниям</span>
                    <input type="checkbox" name="region_id" value="2"/>
                    <select name="company_id">

                    </select>
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
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input class="button-ok" type="submit" value="Получить статистику"/>
    </form>
</div>

<style>
    #statistic,
    #statistic .button-ok{
        margin-left: 20px;
        margin-top: 20px;
    }
    #statistic .statistic-items-body,
    #statistic .region-company .statistic-items-region,
    #statistic .period .statistic-items-period{
        border: 5px groove rgba(228, 224, 224, 0.44);
        border-radius: 5px;
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        margin-bottom: 10px;
        background-color: rgba(236, 236, 236, 0.57);
    }
    #statistic .statistic-items-body{
        display: inline-block;
        vertical-align: top;
    }
   #statistic .region-company,
   #statistic .period{
        width: 50%;
    }
    #statistic .statistic-items-body .statistic-items{
        margin-left: 20px;
    }
    #statistic .statistic-items-body .statistic-items:first-child{
        margin-left: 0px;
    }
    #statistic .region-company .statistic-items-region,
    #statistic .period .statistic-items-period{
        display: inline-block;
        width: 30%;
    }
    #statistic .statistic-polis-header{
        margin-bottom: 15px;
        margin-top: 15px;
    }
    #statistic .header-items{
        display: block;
        font-weight: bold;
    }
    #statistic .button-ok{
        border-radius: 2px;
        height: 30px;
    }

</style>
