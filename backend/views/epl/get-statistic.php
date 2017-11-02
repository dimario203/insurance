<div id="statistic">
    <form method="post" action="<?= \yii\helpers\Url::toRoute(['epl/get-statistic'])?>">
        <div class="settings">
            <div class="statistic-polis">
                <div class="statistic-polis-header">
                    <H2>Выберите вид страховки</H2>
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
                <div class="statistic-items-body">
                    <h5>По регионам</h5>
                    <input type="radio" name="region_company" value="1"/>
                    <select name="region_id">

                    </select>
                </div>
                <div class="statistic-items-body">
                    <h5>По компаниям</h5>
                    <input type="radio" name="region_company" value="2"/>
                    <select name="company_id">

                    </select>
                </div>
            </div>
            <div class="period">
                <div>
                    <input type="text" name="date1" class="tcal" value="" />
                    <input type="text" name="date2" class="tcal" value="" />

                </div>
            </div>
        </div>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Получить статистику"/>
    </form>
</div>

<style>

</style>
