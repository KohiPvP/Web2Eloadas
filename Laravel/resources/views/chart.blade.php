<!doctype html>
<html lang="en">
<head>
<title> Chart</title>
<meta charset="utf-8">
</head>
<body>
    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = {!! json_encode($labels) !!};
        const data = {!! json_encode($data) !!};
        console.log(labels);
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: labels,
            datasets: [{
                label: "Állatok kategória szerint",
                data: data,
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    </script>
</body>
</html>