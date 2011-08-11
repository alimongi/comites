<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $meta->getId() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $meta->getEstadoId() ?></td>
    </tr>
    <tr>
      <th>Cantidad:</th>
      <td><?php echo $meta->getCantidad() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $meta->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $meta->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Deleted at:</th>
      <td><?php echo $meta->getDeletedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('metas/edit?id='.$meta->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('metas/index') ?>">List</a>
