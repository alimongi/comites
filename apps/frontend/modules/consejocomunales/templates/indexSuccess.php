<div id="content">
<h1>Listado de Consejos Comunales</h1>

<h2><caption><?php echo $resultados ?> Consejos Comunales en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Municipio</th>
      <th>Parroquia</th>
      <th>Sector</th>
      <th>Activo</th>
      <th>Contacto</th>
      <th>Telefono</th>
      <th>Creado</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($consejocomunals as $consejocomunal): ?>
    <tr>
      <td><a href="<?php echo url_for('consejocomunales/show?id='.$consejocomunal->getId()) ?>"><?php echo $consejocomunal->getId() ?></a></td>
      <td><?php echo $consejocomunal->getCodigo() ?></td>
      <td><?php echo $consejocomunal->getNombre() ?></td>
      <td><?php echo $consejocomunal->getEstado() ?></td>
      <td><?php echo $consejocomunal->getMunicipio() ?></td>
      <td><?php echo $consejocomunal->getParroquia() ?></td>
      <td><?php echo $consejocomunal->getSector() ?></td>
      <td><?php echo $consejocomunal->getActivo() ?></td>
      <td><?php echo $consejocomunal->getContacto() ?></td>
      <td><?php echo $consejocomunal->getTelefono() ?></td>
      <td><?php echo $consejocomunal->getCreatedAt() ?></td>
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
