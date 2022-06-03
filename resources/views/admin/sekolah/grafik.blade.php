@extends('layouts.adminsekolah')
@section('content')
<style>
  .box{
    width: 600px;
  }
</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>

<script>
    $xiirpl={{ $xiirpl }}
    $xirpl={{ $xirpl }}
    $xrpl={{ $xrpl }}

    $xiimm={{ $xiimm }}
    $ximm={{ $ximm }}
    $xmm={{ $xmm }}

    $xiibkp={{ $xiibkp }}
    $xibkp={{ $xibkp }}
    $xbkp={{ $xbkp}}

    $xiitkro={{ $xiitkro }}
    $xitkro={{ $xitkro }}
    $xtkro={{ $xtkro }}

    $xiitb={{ $xiitb }}
    $xitb={{ $xitb }}
    $xtb={{ $xtb }}

    $total=$xiirpl+$xirpl+$xrpl+ $xiimm+ $ximm+$xmm+$xiibkp+$xibkp+$xbkp+$xiitkro+$xitkro+$xtkro+ $xiitb+ $xitb+ $xtb;
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "siswa", { role: "style" } ],
      ["X-RPL", $xrpl, "#FFFF00"],
      ["XI-RPL", $xirpl, "#FFFF00"],
      ["XII-RPL", $xiirpl, "#FFFF00"],
      ["X-MM", $xmm, "#FF7F00"],
      ["XI-MM", $ximm, "#FF7F00"],
      ["XII-MM", $xiimm, "#FF7F00"],
      ["X-BKP", $xbkp, "#FF0000"],
      ["XI-BKP", $xibkp, "#FF0000"],
      ["XII-BKP", $xiibkp, "#FF0000"],
      ["X-TKRO", $xtkro, "#0000FF"],
      ["XI-TKRO", $xitkro, "#0000FF"],
      ["XII-TKRO", $xiitkro, "#0000FF"],
      ["X-TB", $xtb, "#808080"],
      ["XI-TB", $xitb, "#808080"],
      ["XII-TB", $xiitb, "#808080"],
    ]);
    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      title: "Siswa SMK BagiMu Negeriku "+$total+" siswa",
      width: 1300,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
</script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>




@include('sweetalert::alert') 
@endsection