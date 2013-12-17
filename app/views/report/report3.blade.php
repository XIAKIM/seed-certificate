@extends('index')
@section('content')

    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Corn',  'Rice' , 'Green Bean','Potato'],
          ['2013',  5000000 , 3000000 , 4000000  , 6000000]
        ]);

        var options = {
          title: 'Total number of seed come in check point (kg.)',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
  <div id="chart_div" style="width: 900px; height: 500px;"></div>

@stop