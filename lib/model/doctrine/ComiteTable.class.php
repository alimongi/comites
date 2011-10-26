<?php


class ComiteTable extends Doctrine_Table
{
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Comite');
    }

    public function getJson($id) {
        $_rs = $this->createQuery('c')
                        ->where('c.parroquia_id = ?', $id)
                        ->orderBy('c.nombre')
                        ->execute();
        $_json[] = array('id' => 0, 'descripcion' => '***** Seleccione *****');
        foreach ($_rs as $rs) {
            $_json[] = array('id' => $rs->getId(), 'descripcion' => $rs->getNombre());
        }
        return json_encode(array('datos' => $_json));
    }

       public function getListPager($ids, $page = 1, $limit = 15 )
    {
        $strSQL = Doctrine_Query::create()
                ->select()
                ->from('Comite c')
                ->innerJoin('c.Estado e')
                ->innerJoin('c.Municipio m')
                ->innerJoin('c.Parroquia p')
                ->innerJoin('c.Consejocomunal co')
                ->whereIn('c.estado_id', $ids)
                ->andWhere('c.deleted_at IS NULL');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 15)),
                'comites/index?pagina={%page_number}');
        $this->pagerLayout->setTemplate('{link_to}{%page}{/link_to}');
	$this->pagerLayout->setSelectedTemplate('<span>{%page}</span>');
	$this->pagerLayout->setSeparatorTemplate('&nbsp;');
	$this->pager = $this->pagerLayout->getPager();

        return $this->pager->execute(array());
    }

    
    public function getListPager2($ids, $page = 1, $limit = 15 )
    {
        $strSQL = Doctrine_Query::create()
        ->select('c.estado_id as estado, c.id')->from('comite c')
        ->addSelect('c.nombre as nombre')
        ->addSelect('c.estado_id')
        ->addSelect('count(a.comite_id) as total')
        ->leftJoin('c.Estado e')
        ->leftJoin('c.Adulto a')
        ->whereIn('c.estado_id', $ids)
        ->andWhere('c.deleted_at IS NULL')
        ->groupBy('c.id')
        ->orderBy('c.id');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 15)),
                'comites/index2?pagina={%page_number}');
        $this->pagerLayout->setTemplate('{link_to}{%page}{/link_to}');
	$this->pagerLayout->setSelectedTemplate('<span>{%page}</span>');
	$this->pagerLayout->setSeparatorTemplate('&nbsp;');
	$this->pager = $this->pagerLayout->getPager();

        return $this->pager->execute(array());
    }

    public function getDisplay($options = array(), $return = false) {
        if ($return)
            return $this->pagerLayout->display($options, $return);
    }

    public function getTotalResult() {
        return $this->pager->getNumResults();
    }

    public function getTotalPages() {
        return $this->pager->getLastPage();
    }

    public function haveToPaginate() {
        return $this->pager->haveToPaginate();
    }

}