/**
 * Created by CharlieBarber on 3/29/16.
 */
var gpaChartIsOpen, gpaChartIsOpen2, gpaChartIsOpen3 = false;
var chart; 

function openGPAChart()
{

    if(gpaChartIsOpen == false)
    {
        gpaChartIsOpen = true;
        $(document).ready(function ()
        {
                $.getJSON("../../Model/ChartData.php", function (json) {
                    console.log("got in function");
                    console.log(json);
                    console.log("got past json");

                    chart = new Highcharts.Chart
                    ({
                        chart: {
                            renderTo: 'GPA_Chart',
                            type: 'line'
                        },
                        title: {
                            text: 'Student GPA\'s'
                        },
                        subtitle: {
                            text: 'Charlie Barber'
                        },
                        xAxis: {
                            min: 1,
                            max: 15,
                            title: {
                                text: 'Number of Students'
                            },
                            crosshair: true
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                text: 'GPA'
                            }
                        },
                        tooltip: {

                            shared: true,
                            useHTML: true
                        },
                        plotOptions: {
                            column: {
                                pointPadding: 0.2,
                                borderWidth: 0
                            }
                        },
                        series: [{
                            name: 'GPA',
                            data: json
                        }]

                    });

                });
            
        });
        return true;
    }
    else
    {
        gpaChartIsOpen = false;
        document.getElementById('GPA_Chart').innerHTML = '';
    }


}

function openGPAChart2()
{
    if(gpaChartIsOpen2 == false)
    {
        gpaChartIsOpen2 = true;
        $(document).ready(function ()
        {
            $.getJSON("../../Model/ChartData.php", function (json) {
              
                chart = new Highcharts.Chart
                ({
                    chart: {
                        renderTo: 'GPA_Chart2',
                        type: 'bar'
                    },
                    title: {
                        text: 'Student GPA\'s'
                    },
                    subtitle: {
                        text: 'Charlie Barber'
                    },
                    xAxis: {
                        min: 1,
                        max: 15,
                        title: {
                            text: 'Number of Students'
                        },
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'GPA'
                        }
                    },
                    tooltip: {

                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'GPA',
                        data: json
                    }]

                });

            });

        });
        return true;
    }
    else
    {
        gpaChartIsOpen2 = false;
        document.getElementById('GPA_Chart2').innerHTML = '';
    }
}

function openGPAChart3()
{
    if(gpaChartIsOpen3 == false)
    {
        gpaChartIsOpen3 = true;
        $(document).ready(function ()
        {
            $.getJSON("../../Model/ChartData.php", function (json) {

                chart = new Highcharts.Chart
                ({
                    chart: {
                        renderTo: 'GPA_Chart3',
                        type: 'scatter'
                    },
                    title: {
                        text: 'Student GPA\'s'
                    },
                    subtitle: {
                        text: 'Charlie Barber'
                    },
                    xAxis: {
                        min: 1,
                        max: 15,
                        title: {
                            text: 'Number of Students'
                        },
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'GPA'
                        }
                    },
                    tooltip: {

                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'GPA',
                        data: json
                    }]

                });

            });

        });
        return true;
    }
    else
    {
        gpaChartIsOpen3 = false;
        document.getElementById('GPA_Chart3').innerHTML = '';
    }
}