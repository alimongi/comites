<?php


class EstadoTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Estado');
    }

    public function getTotalesxEstadoC()
    {
        return $_rs = $this->createQuery('e')
                ->select('e.nombre')
                ->addSelect('count(c.id) as total')
                ->from('Estado e')
                ->leftJoin('e.Comite c')
                ->where('e.id <> 25')
                ->andWhere('c.deleted_at IS NULL')
                ->groupBy('e.id')
                ->fetchArray();
    }

    
        public function getTotalesxEstadoA()
    {
        return $_rs = $this->createQuery('e')
                ->select('e.nombre')
                ->addSelect('count(a.id) as total')
                ->from('Estado e')
                ->leftJoin('e.Adulto a')
                ->where('e.id <> 25')
                ->andWhere('a.deleted_at IS NULL')
                ->andWhere('a.fallecido = "No"')
                ->groupBy('e.id')
                ->fetchArray();
    }

}