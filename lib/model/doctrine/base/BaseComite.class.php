<?php

/**
 * BaseComite
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $estado_id
 * @property integer $municipio_id
 * @property integer $parroquia_id
 * @property string $sector
 * @property boolean $registrado
 * @property integer $consejo_id
 * @property long $latitud
 * @property long $longitud
 * @property Estado $Estado
 * @property Municipio $Municipio
 * @property Parroquia $Parroquia
 * @property Consejocomunal $Consejocomunal
 * @property Doctrine_Collection $Adulto
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getNombre()         Returns the current record's "nombre" value
 * @method integer             getEstadoId()       Returns the current record's "estado_id" value
 * @method integer             getMunicipioId()    Returns the current record's "municipio_id" value
 * @method integer             getParroquiaId()    Returns the current record's "parroquia_id" value
 * @method string              getSector()         Returns the current record's "sector" value
 * @method boolean             getRegistrado()     Returns the current record's "registrado" value
 * @method integer             getConsejoId()      Returns the current record's "consejo_id" value
 * @method long                getLatitud()        Returns the current record's "latitud" value
 * @method long                getLongitud()       Returns the current record's "longitud" value
 * @method Estado              getEstado()         Returns the current record's "Estado" value
 * @method Municipio           getMunicipio()      Returns the current record's "Municipio" value
 * @method Parroquia           getParroquia()      Returns the current record's "Parroquia" value
 * @method Consejocomunal      getConsejocomunal() Returns the current record's "Consejocomunal" value
 * @method Doctrine_Collection getAdulto()         Returns the current record's "Adulto" collection
 * @method Comite              setId()             Sets the current record's "id" value
 * @method Comite              setNombre()         Sets the current record's "nombre" value
 * @method Comite              setEstadoId()       Sets the current record's "estado_id" value
 * @method Comite              setMunicipioId()    Sets the current record's "municipio_id" value
 * @method Comite              setParroquiaId()    Sets the current record's "parroquia_id" value
 * @method Comite              setSector()         Sets the current record's "sector" value
 * @method Comite              setRegistrado()     Sets the current record's "registrado" value
 * @method Comite              setConsejoId()      Sets the current record's "consejo_id" value
 * @method Comite              setLatitud()        Sets the current record's "latitud" value
 * @method Comite              setLongitud()       Sets the current record's "longitud" value
 * @method Comite              setEstado()         Sets the current record's "Estado" value
 * @method Comite              setMunicipio()      Sets the current record's "Municipio" value
 * @method Comite              setParroquia()      Sets the current record's "Parroquia" value
 * @method Comite              setConsejocomunal() Sets the current record's "Consejocomunal" value
 * @method Comite              setAdulto()         Sets the current record's "Adulto" collection
 * 
 * @package    inasscomite
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComite extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comite');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('estado_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('parroquia_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('sector', 'string', 80, array(
             'type' => 'string',
             'notnull' => false,
             'notblank' => false,
             'minlength' => 4,
             'length' => 80,
             ));
        $this->hasColumn('registrado', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('consejo_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 4,
             ));
        $this->hasColumn('latitud', 'long', null, array(
             'type' => 'long',
             'notnull' => false,
             ));
        $this->hasColumn('longitud', 'long', null, array(
             'type' => 'long',
             'notnull' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estado', array(
             'local' => 'estado_id',
             'foreign' => 'id'));

        $this->hasOne('Municipio', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasOne('Parroquia', array(
             'local' => 'parroquia_id',
             'foreign' => 'id'));

        $this->hasOne('Consejocomunal', array(
             'local' => 'consejo_id',
             'foreign' => 'id'));

        $this->hasMany('Adulto', array(
             'local' => 'id',
             'foreign' => 'comite_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}