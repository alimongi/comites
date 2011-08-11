<div id="content">
<?php use_javascript('highcharts')?>
<h1>Comités por Estados</h1>

      <?php $totalcomite = 0 ?>
<table>
  <thead>
    <tr>
      <th> Estado </th>
      <th> Cantidad </th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($comites as $comite): ?>
      <tr>
          <td><?php echo $comite['nombre'] ?></td>
          <td><?php echo $comite['total'] ?></td>
      </tr>
      <?php $totalcomite = $totalcomite + $comite['total'] ?>
      <?php endforeach; ?>
  </tbody>
  <div id="container2">
  </div>
</table>

<script type="text/javascript">
    var chart

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container2'
            },
            title: {
                text: 'Total Comités por Estado <?php echo $totalcomite?>'
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b>: '+ this.y;
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Comités',
                data: [
                    <?php foreach ($comites as $comite): ?>
                    ['<?php echo $comite['nombre'] ?>',  <?php echo $comite['total'] ?>],
                    <?php endforeach; ?>
                ]
            }]
        });
    });


</script>

</div>
