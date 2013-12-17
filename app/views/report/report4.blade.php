@extends('index')
@section('content')

  
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Apporved', 'denied'],
          ['2013',  7 , 3 ]     
        ]);

        var options = {
          title: 'Total approve/deny RM3 per year',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
  <div id="chart_div" style="width: 900px; height: 500px;"></div>

@stop