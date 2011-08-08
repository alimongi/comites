<div id="content">
<h1>Consejocomunals List</h1>

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
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($consejocomunals as $consejocomunal): ?>
    <tr>
      <td><a href="<?php echo url_for('consejocomunales/show?id='.$consejocomunal->getId()) ?>"><?php echo $consejocomunal->getId() ?></a></td>
      <td><?php echo $consejocomunal->getCodigo() ?></td>
      <td><?php echo $consejocomunal->getNombre() ?></td>
      <td><?php echo $consejocomunal->getEstadoId() ?></td>
      <td><?php echo $consejocomunal->getMunicipioId() ?></td>
      <td><?php echo $consejocomunal->getParroquiaId() ?></td>
      <td><?php echo $consejocomunal->getSector() ?></td>
      <td><?php echo $consejocomunal->getActivo() ?></td>
      <td><?php echo $consejocomunal->getContacto() ?></td>
      <td><?php echo $consejocomunal->getTelefono() ?></td>
      <td><?php echo $consejocomunal->getCreatedAt() ?></td>
      <td><?php echo $consejocomunal->getUpdatedAt() ?></td>
      <td><?php echo $consejocomunal->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('consejocomunales/new') ?>">New</a>
</div>
