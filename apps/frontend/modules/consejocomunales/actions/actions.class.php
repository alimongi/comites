<?php

/**
 * consejocomunales actions.
 *
 * @package    inasscomite
 * @subpackage consejocomunales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class consejocomunalesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
    $page = $request->getParameter('pagina', 1);
    $this->consejocomunals = Doctrine::getTable('Consejocomunal')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Consejocomunal')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Consejocomunal')->getTotalResult();
    $this->paginas = Doctrine::getTable('Consejocomunal')->getTotalPages();
    $this->menu = Doctrine::getTable('Consejocomunal')->getDisplay(array(), true);
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->consejocomunal = Doctrine::getTable('Consejocomunal')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->consejocomunal);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new ConsejocomunalForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ConsejocomunalForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($consejocomunal = Doctrine::getTable('Consejocomunal')->find(array($request->getParameter('id'))), sprintf('Object Consejocomunal does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new ConsejocomunalForm($consejocomunal,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($consejocomunal = Doctrine::getTable('Consejocomunal')->find(array($request->getParameter('id'))), sprintf('Object consejocomunal does not exist (%s).', $request->getParameter('id')));
    $this->form = new ConsejocomunalForm($consejocomunal);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($consejocomunal = Doctrine::getTable('Consejocomunal')->find(array($request->getParameter('id'))), sprintf('Object consejocomunal does not exist (%s).', $request->getParameter('id')));
    $consejocomunal->delete();

    $this->redirect('consejocomunales/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $consejocomunal = $form->save();

      $this->redirect('consejocomunales/edit?id='.$consejocomunal->getId());
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
}
