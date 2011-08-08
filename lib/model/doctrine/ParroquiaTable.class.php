<?php


class ParroquiaTable extends Doctrine_Table
{

    public static function getInstance()
    {
        return Doctrine_Core::getTable('Parroquia');
    }

    public function getJson($id) {
        $_rs = $this->createQuery('p')
                        ->where('p.municipio_id = ?', $id)
                        ->orderBy('p.nombre')
                        ->execute();
        $_json[] = array('id' => 0, 'descripcion' => '***** Seleccione *****');
        foreach ($_rs as $rs) {
            $_json[] = array('id' => $rs->getId(), 'descripcion' => $rs->getNombre());
        }
        return json_encode(array('datos' => $_json));
    }
}