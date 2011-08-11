<?php

/**
 * main actions.
 *
 * @package    inasscomite
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

      $this->comites = Doctrine::getTable('Estado')->getTotalesxEstadoC();
      
      $this->metas = Doctrine::getTable('Meta')
      ->createQuery('a')
      ->where('a.id <> 25')
      ->execute();
//      $this->adultos = Doctrine::getTable('Estado')->getTotalesxEstadoA();

  }

  public function executeChangePasswd(sfWebRequest $request) {
        if ($request->getMethod() == 'POST' ) {
            $response = $this->getUser()->cambiarPassword($this->getUser()->getGuardUser(), $request->getParameter('current_pass'), $request->getParameter('new_pass'), $request->getParameter('confirm'));
            $this->getUser()->setFlash('notice', $response);
        }
    }
    
}
