<?php


class AdultoTable extends Doctrine_Table
{
       public static function getInstance()
    {
        return Doctrine_Core::getTable('Adulto');
    }

       public function getListPager($ids, $page = 1, $limit = 15 )
    {
        $strSQL = Doctrine_Query::create()
                ->select()
                ->from('Adulto a')
                ->innerJoin('a.Estado e')
                ->innerJoin('a.Municipio m')
                ->innerJoin('a.Parroquia p')
                ->innerJoin('a.Comite co')
                ->whereIn('a.estado_id', $ids)
                ->andWhere('a.fallecido = "No"')
                ->andWhere('a.deleted_at IS NULL');
        $this->pagerLayout = new sfDoctrinePagerLayout(
                new Doctrine_Pager($strSQL, $page, $limit),
                new Doctrine_Pager_Range_Sliding(array('chunk' => 15)),
                'adultos/index?pagina={%page_number}');
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

    public function getAdultoxComite($id)
    {
        return Doctrine_Query::create()
                ->select('a.id, a.ci, a.nombre, a.apellido, a.comite_id, a.tipovoceria')
                ->from('Adulto a')
                ->where('a.deleted_at IS NULL')
                ->andWhere('a.comite_id = ?', $id)
                ->execute(array());
    }


}