<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Race/Ethnicity', 'Percentage of Cases'],
          ['Hispanic', 15.2],
          ['White',  20.4],
          ['Black',  16.2],
          ['Asian', 14.5],
          ['NH/OPI', 19.4],
          ['AI/AN', 18.9],
          ['2 or More', 28.6]

        ]);

        var options = {
          title: 'Prevalence of Mental Illness (By Race/Ethnicity)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

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
   <center> <div id="piechart" style="width: 900px; height: 500px;"></div></center>
   
  </body>
</html>
