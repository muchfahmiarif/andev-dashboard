// Initialize the echarts instance based on the prepared dom
var myChart = echarts.init(document.getElementById("output-analisa"), null, {
    width: 1200,
    height: 400,
});

// Specify the configuration items and data for the chart
var option = {
    title: {
        text: "Output Andev",
    },
    tooltip: {},
    toolbox: {
        feature: {
            saveAsImage: {},
        },
    },
    legend: {
        orient: "horizontal",
        center: 0,
        top: 0,
    },
    xAxis: [
        {
            type: "category",
            axisLabel: {
                rotate: 20,
                verticalAlign: "top",
                align: "right",
            },
        },
    ],
    yAxis: {},
    dataset: {
        source: [
            ["parameter", "Fisik", "Kimia", "Mikrobiologi"],
            ["Analisa Eksternal", 20, 50, 5],
            ["Analisa FG", 350, 80, 250],
            ["Analisa Qualitica", 86.4, 65.2, 82.5],
            ["Analisa RM", 86.4, 65.2, 82.5],
            ["Stabilita Eksternal", 86.4, 65.2, 82.5],
            ["Stabilita Internal", 86.4, 65.2, 82.5],
            ["Support EM", 86.4, 65.2, 82.5],
            ["Validasi Penetralisir", 86.4, 65.2, 82.5],
            ["Efektivitas Pengawet", 86.4, 65.2, 82.5],
            ["ALT-KK", 72.4, 53.9, 39.1],
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
myChart.setOption(option);
