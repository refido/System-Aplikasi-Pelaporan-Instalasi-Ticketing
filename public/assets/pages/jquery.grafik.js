
/**
* Theme: Adminto Admin Template
* Author: Coderthemes
* Grafik
*/

!function($) {
    "use strict";

    var Grafik1 = function() {
    	this.$realData = []
    };

    //creates Bar chart
    Grafik1.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#2f3e47',
            barSizeRatio: 0.2,
            gridTextColor: '#98a6ad',
            barColors: lineColors
        });
    },

    //creates line chart
    Grafik1.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          fillOpacity: opacity,
          pointFillColors: Pfillcolor,
          pointStrokeColors: Pstockcolor,
          behaveLikeLine: true,
          gridLineColor: '#2f3e47',
          hideHover: 'auto',
          resize: true, //defaulted to true
          pointSize: 0,
          gridTextColor: '#98a6ad',
          lineColors: lineColors
        });
    },

    //creates Donut chart
    Grafik1.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors,
            backgroundColor: '#2f3e47',
            labelColor: '#fff'
        });
    },
    
    
    Grafik1.prototype.init = function() {
        //create line chart
        var $data  = [
            { y: '2016', a: 5, b: 0, c: 3, d: 6, e: 2},
            { y: '2017', a: 7, b: 5, c: 6, d: 8, e: 7},
            { y: '2018', a: 3, b: 8, c: 3, d: 2, e: 4},
            { y: '2019', a: 5, b: 5, c: 7, d: 5, e: 2},
            { y: '2020', a: 7, b: 1, c: 1, d: 3, e: 8},
            { y: '2021', a: 5, b: 4, c: 9, d: 1, e: 1},
          ];
        this.createLineChart('morris-line-example', $data, 'y', ['a','b','c','d','e'], ['Ticketing','Caller','Digital Signage','Hardware','Jaringan'],['0.9'],['#ffffff'],['#999999'], ['#10c469','#188ae2','#ff8acc', '#5b69bc', '#ffbd4a']);

        //creating donut chart
        var $donutData = [
                {label: "Kesehatan", value: 9},
                {label: "Pemerintahan", value: 7},
                {label: "Industry", value: 12}
            ];
        this.createDonutChart('morris-donut-example', $donutData, ['#ff8acc', '#5b69bc', '#35b8e0']);
    },
    //init
    $.Grafik1 = new Grafik1, $.Grafik1.Constructor = Grafik1
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Grafik1.init();
}(window.jQuery);