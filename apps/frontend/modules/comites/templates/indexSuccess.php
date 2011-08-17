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
      <th>Acta</th>
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
    <?php if($comite->getRegistrado() == "1"): ?>
    <?php $registrocom = "Si" ?>
    <?php else: ?>
    <?php $registrocom = "No" ?>
    <?php endif; ?>
      <td><?php echo $registrocom ?></td>
      <td><?php echo $comite->getConsejocomunal() ?></td>
    <?php if($comite->getActa() != ""): ?>
      <td>Acta-<?php echo $comite->getNombre() ?></td>
    <?php else: ?>
      <td><?php echo $comite->getActa() ?></td>
    <?php endif; ?>
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