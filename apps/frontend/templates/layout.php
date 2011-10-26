<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
       <?php echo image_tag('CAAM_2.png') ?>
       <?php if($sf_user->getGuardUser()):?>
          <p style="display: inline; color: #FFFFFF; font-size: 10pt; font-family: verdana; float: right; margin: 2px 40px 1px 1px;">Bienvenido(a) | <a href="<?php echo url_for('@sf_guard_signout')?>" class="link-blanco">Salir</a></p>
       <p style="display: inline; color: #FFFFFF; font-size: 8pt; font-family: verdana; float: right; margin: 30px -130px 1px 1px;"> <?php echo $sf_user->getGuardUser()->getFirstName() ?> <?php echo $sf_user->getGuardUser()->getLastName() ?> | <?php echo $sf_user->getGuardUser()->getLastLogin() ?></p>
       <?php endif;?>
       </div>
<div id="lateral">
 <div class="accordion">
        <section id="one">
                <h2><a href="#one">Principal</a></h2>
                <div>
                    <ul>
                    <li><a href="<?php echo url_for('homepage')?>">Pagina Principal</a></li>
                    <li><a href="<?php echo url_for('main/ChangePasswd')?>">Cambiar Password</a></li>
                    <li><a href="<?php echo url_for('@sf_guard_signout')?>">Salir</a></li>
                    </ul>
                </div>
        </section>
        <section id="two">
                <h2><a href="#two">Metas</a></h2>
                <div>
                    <ul>
                     <li><a href="<?php echo url_for('metas/index')?>">Ver</a></li>
                    </ul>
                </div>
        </section>
        <section id="three">
                <h2><a href="#three">Consejos Comunales</a></h2>
                <div>
                    <ul>
                    <li><a href="<?php echo url_for('consejocomunales/new')?>">Agregar</a></li>
                    <li><a href="<?php echo url_for('consejocomunales/index')?>">Ver</a></li>
                    </ul>
                </div>
        </section>
        <section id="four">
                <h2><a href="#four">Comités</a></h2>
                <div>
                     <ul>
                    <li><a href="<?php echo url_for('comites/new')?>">Agregar</a></li>
                    <li><a href="<?php echo url_for('comites/index')?>">Ver</a></li>
                    <li><a href="<?php echo url_for('comites/index2')?>">Ver por Adult@s</a></li>
                    <li><a href="<?php echo url_for('comites/ComiteIndex')?>">Estadística Comité Por Estados</a></li>
                    <li><a href="<?php echo url_for('comites/BuscarxFecha')?>">Estadística Comité Por Fechas</a></li>
                    </ul>
                </div>
        </section>
        <section id="five">
                <h2><a href="#five">Adult@s Mayores</a></h2>
                <div>
                     <ul>
                    <li><a href="<?php echo url_for('adultos/new')?>">Agregar</a></li>
                    <li><a href="<?php echo url_for('adultos/index')?>">Ver</a></li>
                    <li><a href="<?php echo url_for('adultos/BuscarAdulto')?>">Buscar</a></li>
                    <li><a href="<?php echo url_for('adultos/AdultoIndex')?>">Estadística Adult@s Por Estados</a></li>
                    <li><a href="<?php echo url_for('adultos/BuscarxFecha')?>">Estadística Adult@s Por Fechas</a></li>
                    </ul>
                </div>
        </section>
 </div>
 </div>

 

    <?php echo $sf_content ?>
     </div>

  <div id="footer">Todos los derechos reservados. &copy; 2011 INASS</div>

  </body>
    
</html>

