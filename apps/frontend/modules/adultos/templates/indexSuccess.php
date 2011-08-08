<div id="content">
<h1>Adultos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ci</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fnacimiento</th>
      <th>Sexo</th>
      <th>Estado civ</th>
      <th>Estado</th>
      <th>Municipio</th>
      <th>Parroquia</th>
      <th>Direccion</th>
      <th>Telf1</th>
      <th>Telf2</th>
      <th>Mail1</th>
      <th>Familiar</th>
      <th>Telf fam</th>
      <th>Fallecido</th>
      <th>Comite</th>
      <th>Vocero</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($adultos as $adulto): ?>
    <tr>
      <td><a href="<?php echo url_for('adultos/show?id='.$adulto->getId()) ?>"><?php echo $adulto->getId() ?></a></td>
      <td><?php echo $adulto->getCi() ?></td>
      <td><?php echo $adulto->getNombre() ?></td>
      <td><?php echo $adulto->getApellido() ?></td>
      <td><?php echo $adulto->getFnacimiento() ?></td>
      <td><?php echo $adulto->getSexo() ?></td>
      <td><?php echo $adulto->getEstadoCiv() ?></td>
      <td><?php echo $adulto->getEstadoId() ?></td>
      <td><?php echo $adulto->getMunicipioId() ?></td>
      <td><?php echo $adulto->getParroquiaId() ?></td>
      <td><?php echo $adulto->getDireccion() ?></td>
      <td><?php echo $adulto->getTelf1() ?></td>
      <td><?php echo $adulto->getTelf2() ?></td>
      <td><?php echo $adulto->getMail1() ?></td>
      <td><?php echo $adulto->getFamiliar() ?></td>
      <td><?php echo $adulto->getTelfFam() ?></td>
      <td><?php echo $adulto->getFallecido() ?></td>
      <td><?php echo $adulto->getComiteId() ?></td>
      <td><?php echo $adulto->getVocero() ?></td>
      <td><?php echo $adulto->getCreatedAt() ?></td>
      <td><?php echo $adulto->getUpdatedAt() ?></td>
      <td><?php echo $adulto->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('adultos/new') ?>">New</a>
</div>