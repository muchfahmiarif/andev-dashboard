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
            ["parameter", "IK", "SMJ", "SMB"],
            ["Finish Good", 43.3, 85.8, 93.7],
            ["Raw Material", 83.1, 73.4, 55.1],
            ["Eksternal", 86.4, 65.2, 82.5],
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
