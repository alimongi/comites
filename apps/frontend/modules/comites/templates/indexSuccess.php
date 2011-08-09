<div id="content">
<h1>Listado de Comités</h1>

<h2><caption><?php echo $resultados ?> Comités en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Municipio</th>
      <th>Parroquia</th>
      <th>Sector</th>
      <th>Registrado</th>
      <th>Consejo</th>
      <th>Creado</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($comites as $comite): ?>
    <tr>
      <td><a href="<?php echo url_for('comites/show?id='.$comite->getId()) ?>"><?php echo $comite->getId() ?></a></td>
      <td><?php echo $comite->getNombre() ?></td>
      <td><?php echo $comite->getEstado() ?></td>
      <td><?php echo $comite->getMunicipio() ?></td>
      <td><?php echo $comite->getParroquia() ?></td>
      <td><?php echo $comite->getSector() ?></td>
      <td><?php echo $comite->getRegistrado() ?></td>
      <td><?php echo $comite->getConsejocomunal() ?></td>
      <td><?php echo $comite->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if($haveToPaginate): ?>
<div class="onlycssmenu-paging clearfix">
<?php echo html_entity_decode($menu) ?>
</div>
<?php endif;?>

</div>