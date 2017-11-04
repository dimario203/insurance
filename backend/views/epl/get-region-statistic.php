<?php
use kartik\select2\Select2;
?>

<script src="/admin/assets2/highcharts/highcharts.js"></script>
<script src="/admin/assets2/highcharts/exporting.js"></script>

<div id="statistic">
    <form method="post" action="<?= \yii\helpers\Url::toRoute(['epl/get-region-statistic'])?>">
        <div class="settings">
            <div class="statistic-polis">
                <div class="statistic-polis-header">
                    <?php
                        if(isset($message['polis'])){
                            echo "<h4 class='attintion-message'>".$message['polis']."</h4>";
                        } else {
                            echo "<h4>Выберите вид страховки</h4>";
                        }
                    ?>
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
                    <?php
                        if(isset($message['region'])){
                            echo "<h4 class='attintion-message'>".$message['region']."</h4>";
                        } else {
                            echo "<h4>Выберите регион</h4>";
                        }
                    ?>
                </div>
                <div class="statistic-items-region">
                    <?php
                    echo Select2::widget([
                        'name' => 'region',
                        'language' => 'ru',
                        'value' => '',
                        'data' => $regions,
                        'theme' => Select2::THEME_KRAJEE,
                        //'data' => \yii\helpers\ArrayHelper::map(\app\models\polis\Region::find()->all(), 'region_id', 'name', 'locality_id'),
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
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input class="button-ok" type="submit" value="Получить статистику"/>
    </form>
</div>


<?php
if(isset($data['categories'])) {
    ?>

    <div id="container-diagram" style="min-width: 310px; max-width: 800px; min-height: 800px; margin: 0 auto"></div>

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
                categories: <?php
                echo '[';
                $total = count($data['categories']);
                $counter = 0;
                foreach ($data['categories'] as $category){
                    $counter++;
                    if($counter==$total){
                        echo "'".$category."'";
                    } else {
                        echo "'".$category."'".', ';
                    }
                }
                echo ']';
                    ?>,
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
                <?php
                    if(isset($data['osago'])){
                        echo 'name: '."'".$data['osago']['name']."'".", \n";
                        echo 'data: [';
                        $total = count($data['osago']);
                        $counter = 0;
                        foreach ($data['osago'] as $name=>$polis){
                            $counter++;
                            if($name=='name'){
                                continue;
                            }
                            if($counter==$total){
                                echo $polis;
                            } else {
                                echo $polis.', ';
                            }
                        }
                        echo ']},'."\n";
                    }
                        ?>

                <?php
                echo '{'."\n";
                if(isset($data['travel'])){
                    echo 'name: '."'".$data['travel']['name']."'".", \n";
                    echo 'data: [';
                    $total = count($data['travel']);
                    $counter = 0;
                    foreach ($data['travel'] as $name=>$polis){
                        $counter++;
                        if($name=='name'){
                            continue;
                        }
                        if($counter==$total){
                            echo $polis;
                        } else {
                            echo $polis.', ';
                        }
                    }
                    echo ']},'."\n";
                }
                ?>
                <?php
                echo '{'."\n";
                if(isset($data['live'])){
                    echo 'name: '."'".$data['live']['name']."'".", \n";
                    echo 'data: [';
                    $total = count($data['live']);
                    $counter = 0;
                    foreach ($data['live'] as $name=>$polis){
                        $counter++;
                        if($name=='name'){
                            continue;
                        }
                        if($counter==$total){
                            echo $polis;
                        } else {
                            echo $polis.', ';
                        }
                    }
                    echo ']},'."\n";
                }
                ?>
                <?php
                echo '{'."\n";
                if(isset($data['realty'])){
                    echo 'name: '."'".$data['realty']['name']."'".", \n";
                    echo 'data: [';
                    $total = count($data['realty']);
                    $counter = 0;
                    foreach ($data['realty'] as $name=>$polis){
                        $counter++;
                        if($name=='name'){
                            continue;
                        }
                        if($counter==$total){
                            echo $polis;
                        } else {
                            echo $polis.', ';
                        }
                    }
                    echo ']},'."\n";
                }
                ?>
                <?php
                echo '{'."\n";
                if(isset($data['kasko'])){
                    echo 'name: '."'".$data['kasko']['name']."'".", \n";
                    echo 'data: [';
                    $total = count($data['kasko']);
                    $counter = 0;
                    foreach ($data['kasko'] as $name=>$polis){
                        $counter++;
                        if($name=='name'){
                            continue;
                        }
                        if($counter==$total){
                            echo $polis;
                        } else {
                            echo $polis.', ';
                        }
                    }
                    echo ']'."\n".'}]'."\n";
                }
                ?>
        });
    </script>
    <?php
}
?>

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
    #statistic .period .statistic-items-period{
        display: inline-block;
        width: 30%;
    }
    #statistic .region-company .statistic-items-region{
        width: 70%;
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
    #statistic .statistic-select{
        width: 50%;
    }
    #statistic .attintion-message{
        color: red;
    }

</style>


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

