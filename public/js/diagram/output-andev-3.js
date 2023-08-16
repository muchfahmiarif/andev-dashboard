// Initialize the echarts instance based on the prepared dom
var myChart = echarts.init(document.getElementById("output-lain"), null, {
    width: 600,
    height: 400,
});

// Specify the configuration items and data for the chart
var option = {
    title: {
        text: "Output Dokumen",
    },
    tooltip: {},
    toolbox: {
        feature: {
            saveAsImage: {},
        },
    },
    legend: {
        // Try 'horizontal'
        orient: "vertical",
        right: 0,
        top: "center",
    },
    xAxis: {
        type: "category",
    },
    yAxis: {},
    dataset: {
        // Provide a set of data.
        source: [
            ["product", "2015", "2016", "2017"],
            ["Matcha Latte", 43.3, 85.8, 93.7],
            ["Milk Tea", 83.1, 73.4, 55.1],
            ["Cheese Cocoa", 86.4, 65.2, 82.5],
            ["Walnut Brownie", 72.4, 53.9, 39.1],
        ],
    },
    series: [{ type: "bar" }, { type: "bar" }, { type: "bar" }],
};
// Display the chart using the configuration items and data just specified.
myChart.setOption(option);
