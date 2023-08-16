var myChart = echarts.init(document.getElementById("main-complience"), null, {
    width: 1200,
    height: 400,
});
var option;

option = {
    title: {
        text: "Stacked Line",
    },
    tooltip: {
        trigger: "axis",
    },
    legend: {
        data: ["Complience", "Performance Instrument Andev", "Limit"],
    },
    grid: {
        left: "3%",
        right: "4%",
        bottom: "3%",
        containLabel: true,
    },
    toolbox: {
        feature: {
            saveAsImage: {},
        },
    },
    xAxis: {
        type: "category",
        boundaryGap: false,
        data: [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ],
    },
    yAxis: [
        {
            type: "value",
        },
    ],
    series: [
        {
            name: "Complience",
            type: "line",
            label: {
                show: true,
                position: "top",
                color: "blue",
            },
            lineStyle: {
                normal: {
                    color: "blue",
                },
            },
            itemStyle: {
                normal: {
                    color: "blue",
                },
            },
            data: [98, 94, 96, 97, 98, 99, 98, 97, 96, 95, 94, 93],
        },
        {
            name: "Performance Instrument Andev",
            type: "line",
            label: {
                show: true,
                position: "bottom",
                color: "green",
            },
            lineStyle: {
                normal: {
                    color: "green",
                },
            },
            itemStyle: {
                normal: {
                    color: "green",
                },
            },
            data: [96, 96, 92, 98, 95, 96, 93, 94, 95, 96, 97, 98],
        },
        {
            name: "Limit",
            type: "line",
            lineStyle: {
                normal: {
                    color: "red",
                    width: 1,
                    type: "dashed",
                },
            },
            itemStyle: {
                normal: {
                    color: "red",
                    width: 1,
                    type: "dashed",
                },
            },
            data: [95, 95, 95, 95, 95, 95, 95, 95, 95, 95, 95, 95],
        },
    ],
};
option && myChart.setOption(option);
