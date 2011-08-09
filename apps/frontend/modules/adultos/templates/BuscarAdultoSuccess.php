<div id="content" title="Buscar Adult@">
    <?php if($sf_user->hasFlash('notice')): ?>
    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>
    <?php endif?>
    <form method="post" action="<?php echo url_for('adultos/mostrar')?>">
<fieldset>
<label for="ci_adulto">Cedula del Adulto</label>
<input type="text" name="ci_adulto" id="ci_adulto" />
<br>
<br>
<input type="submit" value="Buscar" />
</fieldset>
</form>
</div>
