<div id="content">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $comite->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $comite->getNombre() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $comite->getEstadoId() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $comite->getMunicipioId() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $comite->getParroquiaId() ?></td>
    </tr>
    <tr>
      <th>Sector:</th>
      <td><?php echo $comite->getSector() ?></td>
    </tr>
    <tr>
      <th>Registrado:</th>
      <td><?php echo $comite->getRegistrado() ?></td>
    </tr>
    <tr>
      <th>Consejo:</th>
      <td><?php echo $comite->getConsejoId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $comite->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $comite->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $comite->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comites/edit?id='.$comite->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comites/index') ?>">List</a>
</div>