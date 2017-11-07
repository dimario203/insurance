$('#statistic-form').submit(function() {
    var postTo = "/admin/admin-ajax/get-company-statistic-ajax";
    var msg   = $('#statistic-form').serialize();
    $.post(postTo, msg , renderDiagram, 'json');
    return false;
});


function renderDiagram(data){
    if(data.message.companies != undefined ){
        $('.message-companies').addClass('attention');
        $('.message-companies').html(data.message.companies);
    } else {
        $('.message-companies').toggleClass('attention', false);
        $('.message-companies').html('Выберите регион');
    }
    if(data.message.polis!=undefined){
        $('.message-polis').addClass('attention');
        $('.message-polis').html(data.message.polis);
    } else {
        $('.message-polis').toggleClass('attention', false);
        $('.message-polis').html('Выберите вид страховки');
    }

    if(data.data.polis!=undefined){
        $('#container-diagram').toggleClass('attention', false);

        Highcharts.chart('container-diagram', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Статистика по компаниям с '+data.data.date.data_start+' по '+data.data.date.date_end,
            },
            subtitle: {
                text: 'Ресурс: <a href="/">epolis.shop</a>'
            },
            xAxis: {
                categories: data.data.categories,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Кол-во кликов',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' clicks'
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
            series: data.data.polis
        });
    } else {
        $('#container-diagram').addClass('attention');
        $('#container-diagram').html('<h4>За выбранный период покупок нет</h4>');
    }
}