<div id="content">
<?php use_javascript('highcharts')?>

      <?php $totalcomite = 0 ?>
      <?php $totalmeta = 0 ?>
      <?php $cumplimientometa = 0 ?>

      <?php foreach ($comites as $comite): ?>
      <?php $totalcomite = $totalcomite + $comite['total'] ?>
      <?php endforeach; ?>

      <?php foreach ($metas as $meta): ?>
      <?php $totalmeta = $totalmeta + $meta->getCantidad() ?>
      <?php endforeach; ?>

     <?php $cumplimientometa = (100 * $totalcomite) / $totalmeta ?>
  <div id="container">
  </div>

<script type="text/javascript">
var chart,
   categories = [
      <?php foreach ($comites as $comite): ?>
       '<?php echo $comite['nombre'] ?>',
      <?php endforeach; ?>
  ];
$(document).ready(function() {
   chart = new Highcharts.Chart({
      chart: {
         renderTo: 'container',
         defaultSeriesType: 'bar'
      },
      title: {
         text: 'Total Comités Constituidos <?php echo $totalcomite?> Vs Metas Nacional <?php echo $totalmeta?>'
      },
      subtitle: {
         text: 'Cumplimiento de un <?php echo $cumplimientometa?>% de la Meta'
      },
      xAxis: [{
         categories: categories,
         reversed: false
      }, { // mirror axis on right side
         opposite: true,
         reversed: false,
         categories: categories,
         linkedTo: 0
      }],
      yAxis: {
         title: {
            text: null
         },
         labels: {
            formatter: function(){
               return (Math.abs(this.value) / 1);
            }
         },
         min: -2000,
         max: 2000
      },

      plotOptions: {
         series: {
            stacking: 'normal'
         }
      },

      tooltip: {
         formatter: function(){
            return '<b>'+ this.series.name +' en '+ this.point.category +'</b><br/>'+
                'Cantidad: '+ Highcharts.numberFormat(Math.abs(this.point.y), 0);
         }
      },

      series: [{
         name: 'Constituidos',
         data: [
         <?php foreach ($comites as $comite): ?>
         -<?php echo $comite['total'] ?>,
         <?php endforeach; ?>
    ]
      }, {
         name: 'Meta',
         data: [
         <?php foreach ($metas as $meta): ?>
         <?php echo $meta->getCantidad() ?>,
         <?php endforeach; ?>
        ]
      }]
   });


});
   
</script>


</div>
