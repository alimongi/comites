<?php


class MetaTable extends Doctrine_Table
{

    public function getMetas()
    {
        return $this->createQuery()
                ->select()
                ->from('Meta m')
                ->innerJoin('m.Estado e')
                ->execute(array());
    }    
   
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Meta');
    }
}