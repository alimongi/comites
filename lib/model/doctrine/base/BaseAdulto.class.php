<?php

/**
 * BaseAdulto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $ci
 * @property string $nombre
 * @property string $apellido
 * @property date $fnacimiento
 * @property enum $sexo
 * @property enum $estado_civ
 * @property enum $hijos
 * @property enum $nhijos
 * @property enum $nivelestudio
 * @property integer $ocupacion_id
 * @property enum $asignacion
 * @property string $organismo
 * @property string $foto
 * @property integer $estado_id
 * @property integer $municipio_id
 * @property integer $parroquia_id
 * @property string $direccion
 * @property string $telf1
 * @property string $telf2
 * @property string $mail1
 * @property string $familiar
 * @property string $telf_fam
 * @property enum $fallecido
 * @property integer $comite_id
 * @property enum $vocero
 * @property enum $tipovoceria
 * @property enum $psuv
 * @property enum $rev
 * @property enum $polop
 * @property text $habilidades
 * @property Estado $Estado
 * @property Municipio $Municipio
 * @property Parroquia $Parroquia
 * @property Comite $Comite
 * @property Ocupacion $Ocupacion
 * 
 * @method integer   getId()           Returns the current record's "id" value
 * @method integer   getCi()           Returns the current record's "ci" value
 * @method string    getNombre()       Returns the current record's "nombre" value
 * @method string    getApellido()     Returns the current record's "apellido" value
 * @method date      getFnacimiento()  Returns the current record's "fnacimiento" value
 * @method enum      getSexo()         Returns the current record's "sexo" value
 * @method enum      getEstadoCiv()    Returns the current record's "estado_civ" value
 * @method enum      getHijos()        Returns the current record's "hijos" value
 * @method enum      getNhijos()       Returns the current record's "nhijos" value
 * @method enum      getNivelestudio() Returns the current record's "nivelestudio" value
 * @method integer   getOcupacionId()  Returns the current record's "ocupacion_id" value
 * @method enum      getAsignacion()   Returns the current record's "asignacion" value
 * @method string    getOrganismo()    Returns the current record's "organismo" value
 * @method string    getFoto()         Returns the current record's "foto" value
 * @method integer   getEstadoId()     Returns the current record's "estado_id" value
 * @method integer   getMunicipioId()  Returns the current record's "municipio_id" value
 * @method integer   getParroquiaId()  Returns the current record's "parroquia_id" value
 * @method string    getDireccion()    Returns the current record's "direccion" value
 * @method string    getTelf1()        Returns the current record's "telf1" value
 * @method string    getTelf2()        Returns the current record's "telf2" value
 * @method string    getMail1()        Returns the current record's "mail1" value
 * @method string    getFamiliar()     Returns the current record's "familiar" value
 * @method string    getTelfFam()      Returns the current record's "telf_fam" value
 * @method enum      getFallecido()    Returns the current record's "fallecido" value
 * @method integer   getComiteId()     Returns the current record's "comite_id" value
 * @method enum      getVocero()       Returns the current record's "vocero" value
 * @method enum      getTipovoceria()  Returns the current record's "tipovoceria" value
 * @method enum      getPsuv()         Returns the current record's "psuv" value
 * @method enum      getRev()          Returns the current record's "rev" value
 * @method enum      getPolop()        Returns the current record's "polop" value
 * @method text      getHabilidades()  Returns the current record's "habilidades" value
 * @method Estado    getEstado()       Returns the current record's "Estado" value
 * @method Municipio getMunicipio()    Returns the current record's "Municipio" value
 * @method Parroquia getParroquia()    Returns the current record's "Parroquia" value
 * @method Comite    getComite()       Returns the current record's "Comite" value
 * @method Ocupacion getOcupacion()    Returns the current record's "Ocupacion" value
 * @method Adulto    setId()           Sets the current record's "id" value
 * @method Adulto    setCi()           Sets the current record's "ci" value
 * @method Adulto    setNombre()       Sets the current record's "nombre" value
 * @method Adulto    setApellido()     Sets the current record's "apellido" value
 * @method Adulto    setFnacimiento()  Sets the current record's "fnacimiento" value
 * @method Adulto    setSexo()         Sets the current record's "sexo" value
 * @method Adulto    setEstadoCiv()    Sets the current record's "estado_civ" value
 * @method Adulto    setHijos()        Sets the current record's "hijos" value
 * @method Adulto    setNhijos()       Sets the current record's "nhijos" value
 * @method Adulto    setNivelestudio() Sets the current record's "nivelestudio" value
 * @method Adulto    setOcupacionId()  Sets the current record's "ocupacion_id" value
 * @method Adulto    setAsignacion()   Sets the current record's "asignacion" value
 * @method Adulto    setOrganismo()    Sets the current record's "organismo" value
 * @method Adulto    setFoto()         Sets the current record's "foto" value
 * @method Adulto    setEstadoId()     Sets the current record's "estado_id" value
 * @method Adulto    setMunicipioId()  Sets the current record's "municipio_id" value
 * @method Adulto    setParroquiaId()  Sets the current record's "parroquia_id" value
 * @method Adulto    setDireccion()    Sets the current record's "direccion" value
 * @method Adulto    setTelf1()        Sets the current record's "telf1" value
 * @method Adulto    setTelf2()        Sets the current record's "telf2" value
 * @method Adulto    setMail1()        Sets the current record's "mail1" value
 * @method Adulto    setFamiliar()     Sets the current record's "familiar" value
 * @method Adulto    setTelfFam()      Sets the current record's "telf_fam" value
 * @method Adulto    setFallecido()    Sets the current record's "fallecido" value
 * @method Adulto    setComiteId()     Sets the current record's "comite_id" value
 * @method Adulto    setVocero()       Sets the current record's "vocero" value
 * @method Adulto    setTipovoceria()  Sets the current record's "tipovoceria" value
 * @method Adulto    setPsuv()         Sets the current record's "psuv" value
 * @method Adulto    setRev()          Sets the current record's "rev" value
 * @method Adulto    setPolop()        Sets the current record's "polop" value
 * @method Adulto    setHabilidades()  Sets the current record's "habilidades" value
 * @method Adulto    setEstado()       Sets the current record's "Estado" value
 * @method Adulto    setMunicipio()    Sets the current record's "Municipio" value
 * @method Adulto    setParroquia()    Sets the current record's "Parroquia" value
 * @method Adulto    setComite()       Sets the current record's "Comite" value
 * @method Adulto    setOcupacion()    Sets the current record's "Ocupacion" value
 * 
 * @package    inasscentros
 * @subpackage model
 * @author     Alexis Limongi
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdulto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adulto');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('ci', 'integer', 10, array(
             'type' => 'integer',
             'unique' => true,
             'notnull' => true,
             'notblank' => true,
             'length' => 10,
             ));
        $this->hasColumn('nombre', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('apellido', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('fnacimiento', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             'notblank' => true,
             ));
        $this->hasColumn('sexo', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'M',
              1 => 'F',
             ),
             'notnull' => true,
             'notblank' => true,
             ));
        $this->hasColumn('estado_civ', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Solter@',
              1 => 'Casad@',
              2 => 'Viud@',
              3 => 'Divorciad@',
              4 => 'Separad@',
              5 => 'Conviviente',
             ),
             'notnull' => true,
             'notblank' => true,
             ));
        $this->hasColumn('hijos', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('nhijos', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 0,
              1 => 1,
              2 => 2,
              3 => 3,
              4 => 4,
              5 => 5,
              6 => 6,
              7 => 7,
              8 => 8,
              9 => 9,
              10 => 10,
              11 => 11,
              12 => 12,
              13 => 13,
              14 => 14,
              15 => 15,
              16 => 16,
              17 => 17,
              18 => 18,
              19 => 19,
              20 => 20,
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('nivelestudio', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Ninguno',
              1 => 'Primaria',
              2 => 'Bachiller',
              3 => 'Tecnico Medio',
              4 => 'TSU',
              5 => 'Universitario',
              6 => 'Post-Grado',
              7 => 'Maestria',
              8 => 'Doctorado',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('ocupacion_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('asignacion', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('organismo', 'string', 224, array(
             'type' => 'string',
             'notnull' => false,
             'notblank' => false,
             'minlength' => 4,
             'length' => 224,
             ));
        $this->hasColumn('foto', 'string', 254, array(
             'type' => 'string',
             'notnull' => false,
             'notblank' => false,
             'length' => 254,
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
        $this->hasColumn('direccion', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('telf1', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('telf2', 'string', 120, array(
             'type' => 'string',
             'notnull' => false,
             'notblank' => false,
             'minlength' => 0,
             'length' => 120,
             ));
        $this->hasColumn('mail1', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('familiar', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('telf_fam', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'notblank' => true,
             'minlength' => 4,
             'length' => 120,
             ));
        $this->hasColumn('fallecido', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => true,
             'notblank' => true,
             ));
        $this->hasColumn('comite_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('vocero', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => true,
             'notblank' => true,
             ));
        $this->hasColumn('tipovoceria', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'Ninguna',
              1 => 'Politico-Social',
              2 => 'Productiva',
              3 => 'Comunicacional',
              4 => 'Salud',
              5 => 'Educativa',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('psuv', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('rev', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('polop', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'No',
              1 => 'Si',
             ),
             'notnull' => false,
             'notblank' => false,
             ));
        $this->hasColumn('habilidades', 'text', 300, array(
             'type' => 'text',
             'notnull' => false,
             'notblank' => false,
             'length' => 300,
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

        $this->hasOne('Comite', array(
             'local' => 'comite_id',
             'foreign' => 'id'));

        $this->hasOne('Ocupacion', array(
             'local' => 'ocupacion_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}