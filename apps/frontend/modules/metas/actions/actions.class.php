<?php

/**
 * metas actions.
 *
 * @package    inasscomite
 * @subpackage metas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class metasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->metas = Doctrine::getTable('Meta')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->meta = Doctrine::getTable('Meta')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->meta);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MetaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MetaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($meta = Doctrine::getTable('Meta')->find(array($request->getParameter('id'))), sprintf('Object meta does not exist (%s).', $request->getParameter('id')));
    $this->form = new MetaForm($meta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($meta = Doctrine::getTable('Meta')->find(array($request->getParameter('id'))), sprintf('Object meta does not exist (%s).', $request->getParameter('id')));
    $this->form = new MetaForm($meta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($meta = Doctrine::getTable('Meta')->find(array($request->getParameter('id'))), sprintf('Object meta does not exist (%s).', $request->getParameter('id')));
    $meta->delete();

    $this->redirect('metas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $meta = $form->save();

      $this->redirect('metas/edit?id='.$meta->getId());
    }
  }
}
