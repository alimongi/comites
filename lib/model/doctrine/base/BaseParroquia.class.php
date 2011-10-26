<?php

/**
 * BaseParroquia
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $municipio_id
 * @property string $nombre
 * @property Municipio $Municipio
 * @property Doctrine_Collection $Consejocomunal
 * @property Doctrine_Collection $Comite
 * @property Doctrine_Collection $Adulto
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getMunicipioId()    Returns the current record's "municipio_id" value
 * @method string              getNombre()         Returns the current record's "nombre" value
 * @method Municipio           getMunicipio()      Returns the current record's "Municipio" value
 * @method Doctrine_Collection getConsejocomunal() Returns the current record's "Consejocomunal" collection
 * @method Doctrine_Collection getComite()         Returns the current record's "Comite" collection
 * @method Doctrine_Collection getAdulto()         Returns the current record's "Adulto" collection
 * @method Parroquia           setId()             Sets the current record's "id" value
 * @method Parroquia           setMunicipioId()    Sets the current record's "municipio_id" value
 * @method Parroquia           setNombre()         Sets the current record's "nombre" value
 * @method Parroquia           setMunicipio()      Sets the current record's "Municipio" value
 * @method Parroquia           setConsejocomunal() Sets the current record's "Consejocomunal" collection
 * @method Parroquia           setComite()         Sets the current record's "Comite" collection
 * @method Parroquia           setAdulto()         Sets the current record's "Adulto" collection
 * 
 * @package    inasscentros
 * @subpackage model
 * @author     Alexis Limongi
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParroquia extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('parroquia');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('municipio_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Municipio', array(
             'local' => 'municipio_id',
             'foreign' => 'id'));

        $this->hasMany('Consejocomunal', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));

        $this->hasMany('Comite', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));

        $this->hasMany('Adulto', array(
             'local' => 'id',
             'foreign' => 'parroquia_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}