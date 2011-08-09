<?php

/**
 * adultos actions.
 *
 * @package    inasscomite
 * @subpackage adultos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adultosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
    $page = $request->getParameter('pagina', 1);
    $this->adultos = Doctrine::getTable('Adulto')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Adulto')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Adulto')->getTotalResult();
    $this->paginas = Doctrine::getTable('Adulto')->getTotalPages();
    $this->menu = Doctrine::getTable('Adulto')->getDisplay(array(), true);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->adulto = Doctrine::getTable('Adulto')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->adulto);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new AdultoForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AdultoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($adulto = Doctrine::getTable('Adulto')->find(array($request->getParameter('id'))), sprintf('Object Adulto does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new AdultoForm($adulto,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($adulto = Doctrine::getTable('Adulto')->find(array($request->getParameter('id'))), sprintf('Object adulto does not exist (%s).', $request->getParameter('id')));
    $this->form = new AdultoForm($adulto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($adulto = Doctrine::getTable('Adulto')->find(array($request->getParameter('id'))), sprintf('Object adulto does not exist (%s).', $request->getParameter('id')));
    $adulto->delete();

    $this->redirect('adultos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $adulto = $form->save();

      $this->redirect('adultos/show?id='.$adulto->getId());
    }
  }

  public function executeBuscarAdulto(sfWebRequest $request) {}

  public function executeMostrar(sfWebRequest $request)
    {
        if ($request->getMethod() == 'POST' ) {
            $this->adulto = Doctrine_Query::create()->select()->from('Adulto a')->where('a.ci = ?', $request->getParameter('ci_adulto'))->fetchOne();
            //$this->adulto = Doctrine::getTable('Adulto')->findBy('ci',$request->getParameter('ci_adulto')); esto sirve para recoger los datos dentro de un arreglo
            if(!$this->adulto){
                $this->getUser()->setFlash('notice', 'El registro para la Cédula '.$request->getParameter('ci_adulto').' no existe.');
                $this->redirect('adultos/BuscarAdulto');
            }
            //$this->adulto = $this->adulto[0]; con esto selecciono el primer registro del arreglo anterior
            $this->setTemplate('show');
        }
    }


    public function executeJsonMunicipios(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Municipio')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }

  public function executeJsonParroquias(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Parroquia')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }

        public function executeJsonComites(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Comite')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }


}
