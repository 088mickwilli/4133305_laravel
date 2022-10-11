{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current',{'packages':['bar']})//'bar' เปลี่ยนได้ อ.พูดนาทีที่ 15.32
        google.chart.setOnloadCallback(drawChart);
        function frawChart() {
            var data = goole.visualization.arryToDateTable({{ Js::from($answer)}});
            var option = {
                chart: {
                    title: 'ยอดการยืม-คืนหนังสือ',
                    subtitle: 'ยอดการยืม-คืน ของเดือนนี้',
                },
            };
            var chart = new google.chart.Bar(document.getElementById('barchart'));
            chart.draw(data, google.chart.Bar.converOptions(options));
        }
    </script>
    <title>Bar Chart ::</title>
</head>
<body>
    <h1>Bar chart books</h1>
    <div id="barchart" style="width: 1000px; height: 600px;"></div>
</body>
</html --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pie Chart :::</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']}); google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable({{ Js::from($answer)}})
        ;

        var options ={
            title: 'Student of registeration',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>