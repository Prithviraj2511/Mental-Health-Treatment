

<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
                ["Age","Percentage of Cases",{ role: 'style' }],
                ["18-25",25.8,'#b87333'],
                ["26-49",22.2,'gold'],
                ["50 +",13.8,'cyan'],
               
                         
        ]);

        var options = {
          chart: {
            title: 'Prevalence of Mental Illness (By Age) ',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    <center><div id="columnchart_material" style="width: 800px; height: 500px;"></div></center>

  </body>
</html>