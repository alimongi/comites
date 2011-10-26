<div id="content">
<h1>Listado de Adult@s por Comité</h1>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ci</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Comite</th>
      <th>Tipo de Voceria</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($adultos as $adulto): ?>
    <tr>
      <td><a href="<?php echo url_for('adultos/show?id='.$adulto['id']) ?>"><?php echo $adulto['id'] ?></a></td>
      <td><?php echo $adulto->getCi() ?></td>
      <td><?php echo $adulto->getNombre() ?></td>
      <td><?php echo $adulto->getApellido() ?></td>
      <td><?php echo $adulto->getComite() ?></td>
      <td><?php echo $adulto->getTipovoceria() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
