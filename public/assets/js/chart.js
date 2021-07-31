let ctx = document.getElementById("myChart").getContext("2d");
$.ajax({
    url: `{{route('chart')}}`,
    type: "GET",
    data: {
        _token: "{{ csrf_token() }}",
    },
    success: function (months) {
        let arrayOfMonths = [];
        for (let i = 0; i < 11; ++i) {
            let month = months.find((month) => month.month - 1 === i);
            arrayOfMonths[i] = month ? month.Solid : 0;
        }
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    "يناير",
                    "فبراير",
                    "مارس",
                    "ابريل",
                    "مايو",
                    "يونيو",
                    "يوليو",
                    "أغسطس",
                    "سبتمبر",
                    "أكتوبر",
                    "نوفمبر",
                    "ديسمبر",
                ],
                datasets: [
                    {
                        label: "المبيعات",
                        data: [...arrayOfMonths],
                        backgroundColor: ["#98CEF3"],
                        barThickness: 40,
                    },
                ],
            },
            options: {
                scales: {
                    yAxes: [
                        {
                            display: true,
                            ticks: {
                                beginAtZero: true, // minimum value will be 0.
                                suggestedMin: 0,
                                suggestedMax: 1000,
                                stepSize: 1, // 1 - 2 - 3 ...
                            },
                        },
                    ],
                },
            },
        });
    },
});
