$(document).ready(function() {
    $.get('/storage/uploads/files/tes.csv', function(csv) {
      Highcharts.setOptions({
        chart: {
          style: {
            fontFamily: 'Unica One'
          }
        }
      });

      Highcharts.chart('chart-container', {
        chart: {
            type: 'spline',
        },
        subtitle: {
          text: 'SUMBER: ' +
              'HEWS'
        },
        title: {
            text: 'KASUS DBD TAHUN 2022'
        },
        data: {
          csv: csv
        },
        tooltip: {
          crosshairs: true,
          shared: true
        }
      });
    });
  });