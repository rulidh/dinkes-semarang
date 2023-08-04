$.get('https://dinkes.semarangkota.go.id/content/ajax/info_semarang', {},
function(data) {
  tampil = '';
  count= 0;
  for (var i = data.length - 1; i >= 0; i--) {
    if(count < 3){
      tampil+= '<div class="card mb-2" style="width: auto;"><img src="' + data[count]['fav'] + '" class= "card-img-top img-fluid"><div class="card-body">' +
      '<h5 class="card-title">' + data[count]['titel'] + '</h5>' +
      '<a href="https://semarangkota.go.id/p/' + data[count]['id'] + '/' + data[count]['url'] +
      '" target="_blank">Selengkapnya</a></div></div>'
    }
    count++;
  }
  $('#berita-pemkot').html(tampil);
});

$.get('https://dinkes.semarangkota.go.id/content/ajax/getData', {
  content: 'data'
},
function(data) {
  $('#dbd').html(data['dbd'])
  $('#aki').html(data['aki'])
  $('#akb').html(data['akb'])
  $('#gizi-buruk').html(data['gibur'])
  $('#hiv').html(data['hiv_aids'])
})

geterGraph('dbd', '2023');
$('#lihat').click(function () {
  var kasus= document.getElementById('kasus').value;
  var tahun= document.getElementById('tahun').value;
  geterGraph(kasus, tahun);
});

function geterGraph(kasus, tahun) {
  $.get('https://dinkes.semarangkota.go.id/content/ajax/getData', {
    content: 'grafik', kasus: kasus, tahun: tahun
    }, function(data) {
      showPenyakit(data, kasus, tahun);
    })
}

function showPenyakit(data, kasus, tahun) {
  $('#chart-container').highcharts({
    chart: {
      type: 'spline',
    },
    title : {
      text: data.title+ ' Tahun '+ tahun
    },
    subtitle: {
      text: data.subtitle
    },
    xAxis: {
      labels: {
        align: 'right'
      },
      categories: [
        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
      ]
    },
    yAxis: {
      title: {
        text: ''
      }
    },
    plotOptions: {
      spline: {
        dataLabels: {
          enabled: true
        },
        enableMouseTracking: 'true'
      }
    },
    legend: {
      labelFormatter: function() {
        var total= 0;
        for(var i= this.yData.length; i--;) {
          total+= this.yData[i];
        };
        return this.name+ ' (Total: ' + total + ')';
      }
    },
    tooltip: {
      shared: true,
      crosshairs: true
    },
    credits: {
      enabled: false
    },
    series: data.data
  });
}

Highcharts.setOptions({
  chart: {
    style: {
      fontFamily: 'Unica One'
    }
  }
});

window.onload = () => {
  $('#onload').modal('show');
}

$('.modal-content').children('div')
  .addClass('modal-body')
  .removeAttr('style').children('img')
  .removeAttr('style')
  .addClass('imagepreview img-fluid rounded mx-auto d-block')
  .attr('style', 'width: 100%;');

$('#app-umum').children('div')
.removeAttr('style')
.addClass('col').children('a').children('img')
  .removeAttr('style')
  .addClass('app');

$('#app-internal').children('div')
.removeAttr('style')
.addClass('col').children('a').children('img')
  .removeAttr('style')
  .addClass('app');

$('#lembaga-terkait').children('div').children('img')
  .removeAttr('style')
  .attr('id', 'LT')
  .addClass('img-fluid');

$('#lembaga-terkait').children('div')
  .removeAttr('style')
  .addClass('col-md-3 m-3').children('a').children('img')
      .removeAttr('style')
      .attr('id', 'LT')
      .addClass('img-fluid');

$('#puskesmas').children('div')
.removeAttr('style')
.addClass('carousel-item carousel-items').children('a').addClass('col-md-3 px-1').children('img')
  .addClass('img-fluid rounded p_uptd')
  .removeAttr('style');

$('#puskesmas').children('div:first-child').addClass('active');