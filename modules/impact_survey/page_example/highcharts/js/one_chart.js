// Setting these two options to false will make it print nicer
Highcharts.setOptions({
   plotOptions: {
      series: {
			animation: false,
			shadow: false,
      }
   }
});

// Accepts an array of start and end rgb values, and then returns an array of rgb strings
function colorRamp(startColor, endColor, intervals) {
	var colorDiff = [ 
		(startColor[0] - endColor[0]),
		(startColor[1] - endColor[1]),
		(startColor[2] - endColor[2])
	];

	for(var i = 0; i < colorDiff.length; i++) {
		colorDiff[i] = colorDiff[i] / (intervals - 1); 	
	}

	var colors = new Array();
	for(var i = 0; i < intervals; i++) {
		var r = Math.round( startColor[0] - ( colorDiff[0] * i ) );
		var g = Math.round( startColor[1] - ( colorDiff[1] * i ) );
		var b = Math.round( startColor[2] - ( colorDiff[2] * i ) );
		colors.push("rgb(" + r + ", " + g + ", " + b + ")");
	}
	//console.log(colors);
	return colors;
}

/**
  * Accepts the ID of the target div, the type (bar, pie, etc),
  * the title of the chart, the data (in int-array format), 
  * labels (in string-array format, optional), and the title
  * of the x-axis. 
  */
function renderChart(divId, type, title, data, labels, xTitle, reverseColors) {
     // reverseColors is an optional parameter, with a default of false
     reverseColors = reverseColors || false;

	$(document).ready(function() {
		var chart;
		
		// Redefining colors based on whether type is pie or bar. 
         var colorsArray = new Array();

		/**
		  * Pie charts accept a different type of label.
		  * I don't want to have to call renderChart with different 
		  * parameters for pie and bar, so this will just reformat
		  * the data into the correct syntax for a pie chart.
   		  */
		if ( type == "pie" ) {
			// Re-adjust the div to the correct size
			$("#" + divId).height(250);
			
			// New array to store the new syntax
			var newData = new Array();
			
			// JavaScript's for-each does not guarantee order ... so a manual for-each it is.
			for(var i = 0; i < data.length; i++) {
				newData.push( [labels[i], data[i]] );
			}
			data = newData;
      		colorsArray = [
          		"rgb(243, 253, 207)",
          		"rgb(223, 243, 187)",
          		"rgb(188, 235, 108)",
          		"rgb(158, 216, 60)",
          		"rgb(129, 162, 74)",
          		"rgb(96, 140, 19)",
          		"rgb(71, 104, 14)"
        		];
        	
        	colorsArray = colorRamp( [243, 253, 207], [71, 104, 14], data.length);
     		// Sometimes the colors just don't turn out as expected ... reversing them does the trick usually
     		if (reverseColors) colorsArray.reverse();
		} else if ( type == "bar" ) {
      		// If it's a pie chart, we should be using a green color ramp
			colorsArray = [ "#623874" ];
		}
		
		// Disable the title because they're rendered in HTML - comment the following line to get titles back
		title = "";
		
		chart = new Highcharts.Chart({
			chart: {
				renderTo: divId,
				defaultSeriesType: type,
				shadow: false,
				border: false
			},

			title: {
				text: title
			},

			legend: {
				enabled: false,
			},

			xAxis: {
				categories: labels,
			},

			yAxis: {
				min: 0,

				title: {
					text: xTitle,
				},
			},

			colors: colorsArray,

			tooltip: {
				formatter: function() {
					return this.series.name +': '+ this.y +' percent';
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
				},
				pie: {
					 borderWidth: 0.5,
					 borderColor: "#eee",
					 allowPointSelect: true,
					 cursor: 'pointer',
					 dataLabels: {
						 enabled: true,
						 color: '#666',
						 connectorColor: '#000000',
						 formatter: function() {
							 return this.point.name +' ('+ this.y +'%)';
						 }
					 }
				 }
			},

			credits: {
				enabled: false
			},

			series: [{		
				data: data
			}],		
		});
	});

}