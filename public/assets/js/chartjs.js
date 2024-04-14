$(function() {
  'use strict';


  var colors = {
    primary        : "#6571ff",
    secondary      : "#7987a1",
    success        : "#05a34a",
    info           : "#66d1d1",
    warning        : "#fbbc06",
    danger         : "#ff3366",
    light          : "#e9ecef",
    dark           : "#060c17",
    muted          : "#7987a1",
    gridBorder     : "rgba(77, 138, 240, .15)",
    bodyColor      : "#000",
    cardBg         : "#fff"
  }

  var fontFamily = "'Roboto', Helvetica, sans-serif"




  // Bar chart
  if ($('#chartjsBar').length) {
    // Load data for Chart.js Bar chart
    $.get('/chart/document2', (responseData, status) => {
        if (status === 'success') {
            // Extract labels and data from responseData
            const labels = responseData['data']['labels'];
            const data = responseData['data']['data'];

            // Create new Chart.js Bar chart
            new Chart($("#chartjsBar"), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Data",
                        backgroundColor: [colors.primary, colors.danger, colors.warning, colors.success, colors.info],
                        data: data,
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: false },
                    },
                    scales: {
                        x: {
                            display: true,
                            grid: {
                                display: true,
                                color: colors.gridBorder,
                                borderColor: colors.gridBorder,
                            },
                            ticks: {
                                color: colors.bodyColor,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        y: {
                            grid: {
                                display: true,
                                color: colors.gridBorder,
                                borderColor: colors.gridBorder,
                            },
                            ticks: {
                                color: colors.bodyColor,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });
        }
    });
}



  // Pie Chart
  if ($('#chartjsPie').length) {
    // Load data for Chart.js Pie chart
    $.get('/chart/document', (responseData, status) => {
        if (status === 'success') {
            // Extract labels and data from responseData
            const labels = responseData['data'].map(row => row[0]);
            const data = responseData['data'].map(row => row[1]);

            // Create new Chart.js Pie chart
            new Chart($('#chartjsPie'), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: "",
                        backgroundColor: [colors.primary, colors.danger, colors.info],
                        borderColor: colors.cardBg,
                        data: data
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: colors.bodyColor,
                                font: {
                                    size: '13px',
                                    family: fontFamily
                                }
                            }
                        }
                    },
                    aspectRatio: 2,
                }
            });
        }
    });
}





});