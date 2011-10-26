<div id="content">
<table>
  <tbody>
<tr>
<td><label>Identificador:</label></td>
<td><?php echo $adulto->getId() ?></td>
<td><label>Foto:</label></td>
<td><?php echo image_tag('/uploads/fotos/'.$adulto->getFoto(), array('width'=>'70', 'Heigth'=>'80'))?></td>
</tr>
<tr>
<td><label>Cedula de Identidad:</label></td>
<td><?php echo $adulto->getCi() ?></td>
<td><label>Fecha de Nacimiento:</label></td>
<td><?php echo $adulto->getFnacimiento() ?></td>
</tr>
<tr>
<td><label>Nombres:</label></td>
<td><?php echo $adulto->getNombre() ?></td>
<td><label>Apellidos:</label></td>
<td><?php echo $adulto->getApellido() ?></td>
</tr>
<tr>
<td><label>Sexo:</label></td>
<td><?php echo $adulto->getSexo() ?></td>
<td><label>Estado Civil:</label></td>
<td><?php echo $adulto->getEstadoCiv() ?></td>
</tr>
<tr>
<td><label>Hijos:</label></td>
<td><?php echo $adulto->getHijos() ?></td>
<td><label>Numero de Hijos:</label></td>
<td><?php echo $adulto->getNhijos() ?></td>
</tr>
<tr>
<td><label>Nivel de Estudio:</label></td>
<td><?php echo $adulto->getNivelestudio() ?></td>
<td><label>Ocupacion:</label></td>
<td><?php echo $adulto->getOcupacion() ?></td>
</tr>
<tr>
<td><label>Posee Asignacion Economica:</label></td>
<td><?php echo $adulto->getAsignacion() ?></td>
<td><label>Que Organismo la Otorga:</label></td>
<td><?php echo $adulto->getOrganismo() ?></td>
</tr>
<tr>
<td><label>Estado:</label></td>
<td><?php echo $adulto->getEstado() ?></td>
<td><label>Municipio:</label></td>
<td><?php echo $adulto->getMunicipio() ?></td>
</tr>
<tr>
<td><label>Parroquia:</label></td>
<td><?php echo $adulto->getParroquia() ?></td>
<td><label>Direccion:</label></td>
<td><?php echo $adulto->getDireccion() ?></td>
</tr>
<tr>
<td><label>Telefono de Contacto:</label></td>
<td><?php echo $adulto->getTelf1() ?></td>
<td><label>Otro Telefono de Contacto:</label></td>
<td><?php echo $adulto->getTelf2() ?></td>
</tr>
<tr>
<td><label>Correo Electronico:</label></td>
<td><?php echo $adulto->getMail1() ?></td>
<td><label>Adult@ Fallecido ?:</label></td>
<td><?php echo $adulto->getFallecido() ?></td>
</tr>
<tr>
<td><label>Familiar o Persona de Contacto:</label></td>
<td><?php echo $adulto->getFamiliar() ?></td>
<td><label>Telefono:</label></td>
<td><?php echo $adulto->getTelfFam() ?></td>
</tr>
<tr>
<td><label>Comite al que Pertenece:</label></td>
<td><?php echo $adulto->getComite() ?></td>
<td><label>Es Vocero:</label></td>
<td><?php echo $adulto->getVocero() ?></td>
</tr>
<tr>
<td><label>Tipo de Voceria:</label></td>
<td><?php echo $adulto->getTipovoceria() ?></td>
<td><label>Esta Inscrito en el Registor Electoral:</label></td>
<td><?php echo $adulto->getRev() ?></td>
</tr>
<tr>
<td><label>Esta Inscrito en el PSUV:</label></td>
<td><?php echo $adulto->getPsuv() ?></td>
<td><label>Esta en el Polo Patriotico:</label></td>
<td><?php echo $adulto->getPolop() ?></td>
</tr>
<tr>
<td><label>Habilidades:</label></td>
<td><?php echo $adulto->getHabilidades() ?></td>
<td></td>
<td></td>
</tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('adultos/edit?id='.$adulto->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('adultos/index') ?>">Listar</a>
</div>