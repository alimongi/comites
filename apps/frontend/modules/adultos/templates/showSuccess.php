<div id="content">
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $adulto->getId() ?></td>
    </tr>
    <tr>
      <th>Ci:</th>
      <td><?php echo $adulto->getCi() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $adulto->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $adulto->getApellido() ?></td>
    </tr>
    <tr>
      <th>Fnacimiento:</th>
      <td><?php echo $adulto->getFnacimiento() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $adulto->getSexo() ?></td>
    </tr>
    <tr>
      <th>Estado civ:</th>
      <td><?php echo $adulto->getEstadoCiv() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $adulto->getEstadoId() ?></td>
    </tr>
    <tr>
      <th>Municipio:</th>
      <td><?php echo $adulto->getMunicipioId() ?></td>
    </tr>
    <tr>
      <th>Parroquia:</th>
      <td><?php echo $adulto->getParroquiaId() ?></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><?php echo $adulto->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Telf1:</th>
      <td><?php echo $adulto->getTelf1() ?></td>
    </tr>
    <tr>
      <th>Telf2:</th>
      <td><?php echo $adulto->getTelf2() ?></td>
    </tr>
    <tr>
      <th>Mail1:</th>
      <td><?php echo $adulto->getMail1() ?></td>
    </tr>
    <tr>
      <th>Familiar:</th>
      <td><?php echo $adulto->getFamiliar() ?></td>
    </tr>
    <tr>
      <th>Telf fam:</th>
      <td><?php echo $adulto->getTelfFam() ?></td>
    </tr>
    <tr>
      <th>Fallecido:</th>
      <td><?php echo $adulto->getFallecido() ?></td>
    </tr>
    <tr>
      <th>Comite:</th>
      <td><?php echo $adulto->getComiteId() ?></td>
    </tr>
    <tr>
      <th>Vocero:</th>
      <td><?php echo $adulto->getVocero() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $adulto->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $adulto->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $adulto->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('adultos/edit?id='.$adulto->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('adultos/index') ?>">List</a>
</div>