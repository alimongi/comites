<div id="content" title="Cambiar Contraseña">
    <?php if($sf_user->hasFlash('notice')): ?>
    <div id="mensaje"><p><?php echo $sf_user->getFlash('notice')?></p></div>
    <?php endif?>
    <form id="change-password" method="post" action="<?php echo url_for('main/ChangePasswd')?>">
<fieldset>
<label for="current_pass">Contraseña Anterior</label>
<input type="password" name="current_pass" id="current_pass" />
<br>
<br>
<label for="new_pass">Nueva Contraseña</label>
<input type="password" name="new_pass" id="new_pass" />
<br>
<br>
<label for="confirm">Confirmar Contraseña</label>
<input type="password" name="confirm" id="confirm" />
<br>
<br>
<input type="submit" value="Cambiar" />
</fieldset>
</form>
</div>
