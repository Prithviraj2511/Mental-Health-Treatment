<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Male',   15.1],
          ['Female',      22.3],
          ['Overall',  18.9]
        
        ]);

        var options = {
          title: 'Prevalence of Mental Illness (By Gender)',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <br>
    <br>
    <br>
    <br>
    <br>
    <center><div id="donutchart" style="width: 900px; height: 500px;"></div></center>
  </body>
</html>