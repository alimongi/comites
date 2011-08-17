<?php

/**
 * comites actions.
 *
 * @package    inasscomite
 * @subpackage comites
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comitesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $ids = $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados());
    $page = $request->getParameter('pagina', 1);
    $this->comites = Doctrine::getTable('Comite')->getListPager($ids, $page);
    $this->haveToPaginate = Doctrine::getTable('Comite')->haveToPaginate();
    $this->resultados = Doctrine::getTable('Comite')->getTotalResult();
    $this->paginas = Doctrine::getTable('Comite')->getTotalPages();
    $this->menu = Doctrine::getTable('Comite')->getDisplay(array(), true);
  }
  
  public function executeComiteIndex(sfWebRequest $request)
  {
      $this->comites = Doctrine::getTable('Estado')->getTotalesxEstadoC();
  }

  public function executeDownloadActa(sfWebRequest $request)
  {
    $mimeTypes = array('doc' => 'application/msword', 'odt' => 'application/vnd.oasis.opendocument.text');
    $this->comite = Doctrine::getTable('Comite')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->comite);
    $_datos = explode('.', $this->comite->getActa());
    $this->pathdocumento =  sfConfig::get('sf_upload_dir').'/actas/'.$this->comite->getActa();
    header("Content-Type: ".$mimeTypes[$_datos[1]]);
    header ("Content-Disposition: attachment; filename=Acta-".$this->comite->getNombre().'.'.$_datos[1]);
    header("Content-Length: ".filesize($this->pathdocumento));
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    readfile($this->pathdocumento);
  }

   public function executeBuscarxFecha(sfWebRequest $request)
  {
       $this->form = new SearchForm();
  }

  public function executeMostrar(sfWebRequest $request)
    {
      
      if ($request->getMethod() == 'POST' ) {
          $this->form = new SearchForm();
            $this->comites = Doctrine_Query::create()
            ->select()->from('comite c')
            ->addSelect('e.nombre as nombre')
            ->addSelect('c.estado_id')
            ->addSelect('count(c.id) as total')
            ->leftJoin('c.Estado e')
            ->where('c.created_at >= ?', $request->getParameter('fecha_inicial'))
            ->andWhere('c.created_at <= ?', $request->getParameter('fecha_final'))
            ->andWhere('c.deleted_at IS NULL')
            ->groupBy('c.estado_id')
            ->fetchArray();
       $this->fecha_inicial = $request->getParameter('fecha_inicial', '');
       $this->fecha_final = $request->getParameter('fecha_final', '');
            }
        $this->setTemplate('BuscarxFecha');
    }


  public function executeShow(sfWebRequest $request)
  {
    $this->comite = Doctrine::getTable('Comite')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->comite);
  }

  public function executeNew(sfWebRequest $request)
  {
      $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
      $this->form = new ComiteForm(array(),$ids);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ComiteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comite = Doctrine::getTable('Comite')->find(array($request->getParameter('id'))), sprintf('Object Comite does not exist (%s).', $request->getParameter('id')));
    $ids = array('ids' => $this->getUser()->getIdsEstados($this->getUser()->getGuardUser()->getEstados()));
    $this->form = new ComiteForm($comite,$ids);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comite = Doctrine::getTable('Comite')->find(array($request->getParameter('id'))), sprintf('Object comite does not exist (%s).', $request->getParameter('id')));
    
    $this->form = new ComiteForm($comite);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comite = Doctrine::getTable('Comite')->find(array($request->getParameter('id'))), sprintf('Object comite does not exist (%s).', $request->getParameter('id')));
    $comite->delete();

    $this->redirect('comites/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comite = $form->save();

      $this->redirect('comites/show?id='.$comite->getId());
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

      public function executeJsonConsejos(sfWebRequest $request)
  {
      $response = $this->getResponse();
      $response->setContentType('application/json');
      $output = Doctrine::getTable('Consejocomunal')->getJson($request->getParameter('id'));
      return $this->renderText($output);
  }


}
