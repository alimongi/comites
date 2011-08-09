<div id="content">
<h1>Listado de Adult@s Mayores</h1>

<h2><caption><?php echo $resultados ?> Adult@s en <?php echo $paginas ?> p&aacute;gina(s)</caption></h2>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ci</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Sexo</th>
      <th>Estado civ</th>
      <th>Estado</th>
      <th>Municipio</th>
      <th>Parroquia</th>
      <th>Comite</th>
      <th>Vocero</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($adultos as $adulto): ?>
    <tr>
      <td><a href="<?php echo url_for('adultos/show?id='.$adulto->getId()) ?>"><?php echo $adulto->getId() ?></a></td>
      <td><?php echo $adulto->getCi() ?></td>
      <td><?php echo $adulto->getNombre() ?></td>
      <td><?php echo $adulto->getApellido() ?></td>
      <td><?php echo $adulto->getSexo() ?></td>
      <td><?php echo $adulto->getEstadoCiv() ?></td>
      <td><?php echo $adulto->getEstado() ?></td>
      <td><?php echo $adulto->getMunicipio() ?></td>
      <td><?php echo $adulto->getParroquia() ?></td>
      <td><?php echo $adulto->getComite() ?></td>
      <td><?php echo $adulto->getVocero() ?></td>
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