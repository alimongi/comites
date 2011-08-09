<div id="content">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $consejocomunal->getId() ?></td>
    </tr>
    <tr>
      <th>Codigo:</th>
      <td><?php echo $consejocomunal->getCodigo() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $consejocomunal->getNombre() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $consejocomunal->getEstado() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $consejocomunal->getMunicipio() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $consejocomunal->getParroquia() ?></td>
    </tr>
    <tr>
      <th>Sector:</th>
      <td><?php echo $consejocomunal->getSector() ?></td>
    </tr>
    <tr>
      <th>Activo:</th>
      <td><?php echo $consejocomunal->getActivo() ?></td>
    </tr>
    <tr>
      <th>Contacto:</th>
      <td><?php echo $consejocomunal->getContacto() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $consejocomunal->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $consejocomunal->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $consejocomunal->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $consejocomunal->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('consejocomunales/edit?id='.$consejocomunal->getId().'&codigo='.$consejocomunal->getCodigo()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('consejocomunales/index') ?>">Listar</a>
</div>