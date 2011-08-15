<div id="content">
    <?php if($sf_user->hasFlash('notice')): ?>
<!--    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>-->
    <?php endif?>
    <form method="post" action="<?php echo url_for('comites/mostrar')?>">
<fieldset>
<label for="fecha_inicial">Fecha Inicial</label>
<input type="date" name="fecha_inicial" id="fecha_inicial" />
<br>
<label for="fecha_final">Fecha Final</label>
<input type="date" name="fecha_final" id="fecha_final" />
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>

<?php use_javascript('highcharts')?>
<h1>Comités por Estados entre Fechas <?php echo $_POST['fecha_inicial'] ?> y <?php echo $_POST['fecha_final'] ?></h1>

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
