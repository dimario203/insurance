<script src="/admin/assets2/highcharts/highcharts.js"></script>
<script src="/admin/assets2/highcharts/exporting.js"></script>

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

<div id="container-diagram" style="min-width: 310px; max-width: 800px; min-height: 800px; margin: 0 auto"></div>

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
        background-color: rgba(236, 236, 236, 0.49);
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
        color:  #444444;
    }

</style>

<script>
    Highcharts.chart('container-diagram', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Historic World Population by Region'
        },
        subtitle: {
            text: 'Source: <a href="/">epolis.shop</a>'
        },
        xAxis: {
            categories: ['Москва', 'Питер', 'Радуга', 'Рязань'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Clicks',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'ОСАГО',
            data: [107, 31, 635, 203, 2]
        }, {
            name: 'Путишествия',
            data: [133, 156, 947, 408, 6]
        }, {
            name: 'Жизнь',
            data: [1052, 954, 4250, 740, 38]
        }]
    });
</script>
<!--<script>
    Highcharts.chart('container-diagram', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'World\'s largest cities per 2014'
        },
        subtitle: {
            text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Shanghai', 23.7],
                ['Lagos', 16.1],
                ['Istanbul', 14.2],
                ['Karachi', 14.0],
                ['Mumbai', 12.5],
                ['Moscow', 12.1],
                ['São Paulo', 11.8],
                ['Beijing', 11.7],
                ['Guangzhou', 11.1],
                ['Delhi', 11.1],
                ['Shenzhen', 10.5],
                ['Seoul', 10.4],
                ['Jakarta', 10.0],
                ['Kinshasa', 9.3],
                ['Tianjin', 9.3],
                ['Tokyo', 9.0],
                ['Cairo', 8.9],
                ['Dhaka', 8.9],
                ['Mexico City', 8.9],
                ['Lima', 8.9]
            ],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 0, // 10 pixels down from the top
                x:30,
                style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
</script>-->

