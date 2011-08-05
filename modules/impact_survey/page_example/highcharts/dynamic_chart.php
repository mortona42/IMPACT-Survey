<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php

include('../../survey_variables.php');

?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-utf-8">
<title>Some test chart</title>
<script type="text/javascript" src="js/jquery-1.6.js"></script> 
<script type="text/javascript" src="js/highcharts.src.js"></script> 
<script>
Highcharts.setOptions({
   plotOptions: {
      series: {
	animation: true,
	shadow: true,
      }
   }
});

var chart;

$(document).ready(function() {
  
 chart = new Highcharts.Chart({
    chart: {
       renderTo: 'container',
       defaultSeriesType: 'bar',
       shadow: false,
       "stroke-width" : 0,
       border: false,
   },

    title: {
       text: 'Income Level as Percentage of Poverty Threshold'
    },
   
    legend: {
	enabled: false,
    },

    xAxis: {
       categories: ["<100%", "100-200%", "200-300%", ">300%", "Don't know or refused"],
       title: {
          text: null
       },
    },

    yAxis: {
       min: 0,
       title: {
	  text: 'Percent of patrons', // This is the title for the y-axis ... blank, since there shouldn't be one.
          align: 'high'
       }
    },

    //colors: ["#7A3694"], 
    colors: [ "#623874" ],

    tooltip: {
       formatter: function() {
          return ''+
              this.series.name +': '+ this.y +' percent';
       }
    },

    plotOptions: {
       bar: {
          dataLabels: {
             enabled: true,
             formatter: function() {
                return this.y + '%';
             }
          }
       }
    },
    
    credits: {
       enabled: false
    },

    series: [{
       name: '',
       data: [<?=$v["Z_poverty1_p"]?>, <?=$v["Z_poverty2_p"]?>, <?=$v["Z_poverty3_p"]?>, <?=$v["Z_poverty4_p"]?>, <?=$v["Z_poverty_dk_p"]?>]
        },],
    });
});
</script>
</head>

<body>

<div id="container" style="width: 600px; height: 400px; border:none"></div> 

</body>
</html>
