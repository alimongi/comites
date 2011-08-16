<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="content">
    <?php if($sf_user->hasFlash('notice')): ?>
<!--    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>-->
    <?php endif?>

<form method="post" action="<?php echo url_for('comites/mostrar')?>">
<fieldset>
<label for="fecha_inicial">Fecha Inicial</label>
<?php echo $form['fecha_inicial']->render() ?>
<br>
<label for="fecha_final">Fecha Final</label>
<?php echo $form['fecha_final']->render() ?>
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>

<?php use_javascript('highcharts')?>
    <?php if(isset ($fecha_inicial)): ?>
<h1>Cantidad de Comités  Constituidos entre las Fechas <?php echo $fecha_inicial ?> y <?php echo $fecha_final ?></h1>
    <?php endif ?>
      <?php $totalcomite = 0 ?>
<?php if(isset ($comites)): ?>
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
<?php endif;?>

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
