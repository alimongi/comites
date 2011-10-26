
<div id="content">
<h1>Listado de Comités con Adult@s</h1>
 <h2><caption><?php echo $resultados ?> Comités en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

 <?php $totalcomite = 0 ?>

<table>
  <thead>
    <tr>
      <th> comite </th>
      <th> estado </th>
      <th> total adultos </th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($comites as $comite): ?>
      <tr>
          <td><a href="<?php echo url_for('comites/AdultoxComite?id='.$comite['id']) ?>"><?php echo $comite['nombre'] ?></a></td>
          <td><?php echo $_estados[$comite['estado']] ?></td>
          <td><?php echo $comite['total'] ?></td>
      </tr>
      <?php $totalcomite = $totalcomite + $comite['total'] ?>
      <?php endforeach; ?>
  </tbody>

</table>

 <?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
<?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>

</div>
