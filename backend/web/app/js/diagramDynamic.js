$('#statistic-form').submit(function() {
    var postTo = "/admin/admin-ajax/get-dynamic-statistic-ajax";
    var msg   = $('#statistic-form').serialize();
    $.post(postTo, msg , renderDiagram, 'json');
    return false;
});


function renderDiagram(data){
    if(data.message.polis!=undefined){
        $('.message-polis').addClass('attention');
        $('.message-polis').html(data.message.polis);
    } else {
        $('.message-polis').toggleClass('attention', false);
        $('.message-polis').html('Выберите вид страховки');
    }

    if(data.data.polis!=undefined){
        $('#container-diagram-dynamic').toggleClass('attention', false);

        Highcharts.chart('container-diagram-dynamic', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Динамика покупок',
            },
            subtitle: {
                text: 'с '+data.data.date.data_start+' по '+data.data.date.date_end,
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                    month: '%e. %b',
                    year: '%b'
                },
                title: {
                    text: 'Дата'
                }
            },
            yAxis: {
                title: {
                    text: 'Количество кликов'
                },
                min: 0
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: '{point.x:%e. %b}: {point.y:.0f}'
            },

            plotOptions: {
                spline: {
                    marker: {
                        enabled: true
                    }
                }
            },
            series: data.data.polis
        });
    } else {
        if(data.message.polis==undefined){
            $('#container-diagram').addClass('attention');
            $('#container-diagram').html('<h4>За выбранный период покупок нет</h4>');
        }
    }
}


