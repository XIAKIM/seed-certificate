@extends('index')
@section('content')
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Request', 'amount'],
          ['PP1',  20     ],
          ['PP2',  17      ],
          ['PP3',  6       ],
          ['PP4',  6       ],
          ['PP5',  3       ],
          ['PP6',  8       ],
          ['PP8',  11       ],
          ['PP10',  5      ],
          ['PP11',  9      ],
          ['PP12',  20     ]
          ['RM3',  3       ],
        ]);

        var options = {
          title: 'Total Number of Request',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>
  <div id="chart_div" style="width: 900px; height: 500px;"></div>
@stop