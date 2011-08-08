<?php


class MunicipioTable extends Doctrine_Table
{

    public static function getInstance()
    {
        return Doctrine_Core::getTable('Municipio');
    }

    public function getJson($id) {
        $_rs = $this->createQuery('m')
                        ->where('m.estado_id = ?', $id)
                        ->orderBy('m.nombre')
                        ->execute();
        $_json[] = array('id' => 0, 'descripcion' => '***** Seleccione *****');
        foreach ($_rs as $rs) {
            $_json[] = array('id' => $rs->getId(), 'descripcion' => $rs->getNombre());
        }
        return json_encode(array('datos' => $_json));
    }


}