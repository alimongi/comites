<div id="content">
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('adultos/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

    <table>
      <?php echo $form->renderGlobalErrors() ?>
      <?php echo $form->renderHiddenFields(false) ?>

    <tbody>
<tr>
    <td></td>
    <td></td>
<td><label>Foto:</label></td>
<td><?php echo $form['foto'] ?></td>
</tr>        
<tr>
<td><label>Cedula de Identidad:</label></td>
<td><?php echo $form['ci'] ?></td>
<td><label>Fecha de Nacimiento:</label></td>
<td><?php echo $form['fnacimiento'] ?></td>
</tr>
<tr>
<td><label>Nombres:</label></td>
<td><?php echo $form['nombre'] ?></td>
<td><label>Apellidos:</label></td>
<td><?php echo $form['apellido'] ?></td>
</tr>
<tr>
<td><label>Sexo:</label></td>
<td><?php echo $form['sexo'] ?></td>
<td><label>Estado Civil:</label></td>
<td><?php echo $form['estado_civ'] ?></td>
</tr>
<tr>
<td><label>Hijos:</label></td>
<td><?php echo $form['hijos'] ?></td>
<td><label>Numero de Hijos:</label></td>
<td><?php echo $form['nhijos'] ?></td>
</tr>
<tr>
<td><label>Nivel de Estudio:</label></td>
<td><?php echo $form['nivelestudio'] ?></td>
<td><label>Ocupacion:</label></td>
<td><?php echo $form['ocupacion_id'] ?></td>
</tr>
<tr>
<td><label>Posee Asignacion Economica:</label></td>
<td><?php echo $form['asignacion'] ?></td>
<td><label>Que Organismo la Otorga:</label></td>
<td><?php echo $form['organismo'] ?></td>
</tr>
<tr>
<td><label>Estado:</label></td>
<td><?php echo $form['estado_id'] ?></td>
<td><label>Municipio:</label></td>
<td><?php echo $form['municipio_id'] ?></td>
</tr>
<tr>
<td><label>Parroquia:</label></td>
<td><?php echo $form['parroquia_id'] ?></td>
<td><label>Direccion:</label></td>
<td><?php echo $form['direccion'] ?></td>
</tr>
<tr>
<td><label>Telefono de Contacto:</label></td>
<td><?php echo $form['telf1'] ?></td>
<td><label>Otro Telefono de Contacto:</label></td>
<td><?php echo $form['telf2'] ?></td>
</tr>
<tr>
<td><label>Correo Electronico:</label></td>
<td><?php echo $form['mail1'] ?></td>
<td><label>Adult@ Fallecido ?:</label></td>
<td><?php echo $form['fallecido'] ?></td>
</tr>
<tr>
<td><label>Familiar o Persona de Contacto:</label></td>
<td><?php echo $form['familiar'] ?></td>
<td><label>Telefono:</label></td>
<td><?php echo $form['telf_fam'] ?></td>
</tr>
<tr>
<td><label>Comite al que Pertenece:</label></td>
<td><?php echo $form['comite_id'] ?></td>
<td><label>Es Vocero:</label></td>
<td><?php echo $form['vocero'] ?></td>
</tr>
<tr>
<td><label>Tipo de Voceria:</label></td>
<td><?php echo $form['tipovoceria'] ?></td>
<td><label>Esta Inscrito en el Registor Electoral:</label></td>
<td><?php echo $form['rev'] ?></td>
</tr>
<tr>
<td><label>Esta Inscrito en el PSUV:</label></td>
<td><?php echo $form['psuv'] ?></td>
<td><label>Esta en el Polo Patriotico:</label></td>
<td><?php echo $form['polop'] ?></td>
</tr>
<tr>
<td><label>Habilidades:</label></td>
<td><?php echo $form['habilidades'] ?></td>
<td></td>
<td></td>
</tr>
    </tbody>
    </table>
     <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('adultos/index') ?>">Regresar a la Lista</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'adultos/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    
</form>
</div>
