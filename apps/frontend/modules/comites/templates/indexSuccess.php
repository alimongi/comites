<div id="content">
<h1>Comites List</h1>

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
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comites as $comite): ?>
    <tr>
      <td><a href="<?php echo url_for('comites/show?id='.$comite->getId()) ?>"><?php echo $comite->getId() ?></a></td>
      <td><?php echo $comite->getNombre() ?></td>
      <td><?php echo $comite->getEstadoId() ?></td>
      <td><?php echo $comite->getMunicipioId() ?></td>
      <td><?php echo $comite->getParroquiaId() ?></td>
      <td><?php echo $comite->getSector() ?></td>
      <td><?php echo $comite->getRegistrado() ?></td>
      <td><?php echo $comite->getConsejoId() ?></td>
      <td><?php echo $comite->getCreatedAt() ?></td>
      <td><?php echo $comite->getUpdatedAt() ?></td>
      <td><?php echo $comite->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


  <a href="<?php echo url_for('comites/new') ?>">New</a>
</div>