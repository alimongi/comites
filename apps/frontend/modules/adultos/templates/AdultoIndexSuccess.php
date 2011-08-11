<div id="content">
<?php use_javascript('highcharts')?>
<h1>Adult@s por Estados</h1>

      <?php $totaladulto = 0 ?>
<table>
  <thead>
    <tr>
      <th> Estado </th>
      <th> Cantidad </th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($adultos as $adulto): ?>
      <tr>
          <td><?php echo $adulto['nombre'] ?></td>
          <td><?php echo $adulto['total'] ?></td>
      </tr>
      <?php $totaladulto = $totaladulto + $adulto['total'] ?>
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
                text: 'Total Adult@s por Estado <?php echo $totaladulto?>'
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
                name: 'Adult@s',
                data: [
                    <?php foreach ($adultos as $adulto): ?>
                    ['<?php echo $adulto['nombre'] ?>',  <?php echo $adulto['total'] ?>],
                    <?php endforeach; ?>
                ]
            }]
        });
    });




</script>


</div>
