<div id="content">
<h1>Metas por Estado</h1>
      <?php $totalmeta = 0 ?>
<table>
  <thead>
    <tr>
      <th>Estado</th>
      <th>Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($metas as $meta): ?>
    <tr>
      <?php if ($meta->getEstadoId() < 25 ): ?>
      <td><?php echo $meta->getEstado() ?></td>
      <td><?php echo $meta->getCantidad() ?></td>
      <?php $totalmeta = $totalmeta + $meta->getCantidad() ?>
      <?php endif; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <h2><?php echo 'Total Meta Nacional', ' ', $totalmeta  ?></h2>
</table>

</div>