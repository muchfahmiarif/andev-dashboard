// Initialize the echarts instance based on the prepared dom
var myChart = echarts.init(
    document.getElementById("output-riset-validasi"),
    null,
    {
        width: 600,
        height: 400,
    }
);

// Specify the configuration items and data for the chart
var option = {
    title: {
        text: "Output Riset dan Validasi",
    },
    tooltip: {},
    toolbox: {
        feature: {
            dataView: { show: true, readOnly: false },
            magicType: { show: true, type: ["line", "bar"] },
            restore: { show: true },
            saveAsImage: { show: true },
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
            ["parameter", "Riset", "Validasi"],
            ["Eksternal", 43, 50],
            ["Semi Solid", 83, 25],
            ["Solid", 86, 90],
            ["Raw Material", 72, 39],
        ],
    },
    series: [
        {
            type: "bar",
            label: {
                show: true,
                position: "top",
            },
        },
        {
            type: "bar",
            label: {
                show: true,
                position: "top",
            },
        },
    ],
};
// Display the chart using the configuration items and data just specified.
myChart.setOption(option);
