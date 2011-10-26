<?php

/**
 * Adulto filter form base class.
 *
 * @package    inasscentros
 * @subpackage filter
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdultoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fnacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sexo'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'estado_civ'   => new sfWidgetFormChoice(array('choices' => array('' => '', 'Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Conviviente' => 'Conviviente'))),
      'hijos'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'nhijos'       => new sfWidgetFormChoice(array('choices' => array('' => '', 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20))),
      'nivelestudio' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Ninguno' => 'Ninguno', 'Primaria' => 'Primaria', 'Bachiller' => 'Bachiller', 'Tecnico Medio' => 'Tecnico Medio', 'TSU' => 'TSU', 'Universitario' => 'Universitario', 'Post-Grado' => 'Post-Grado', 'Maestria' => 'Maestria', 'Doctorado' => 'Doctorado'))),
      'ocupacion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ocupacion'), 'add_empty' => true)),
      'asignacion'   => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'organismo'    => new sfWidgetFormFilterInput(),
      'foto'         => new sfWidgetFormFilterInput(),
      'estado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'municipio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'parroquia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
      'direccion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telf1'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telf2'        => new sfWidgetFormFilterInput(),
      'mail1'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'familiar'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telf_fam'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fallecido'    => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'comite_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'), 'add_empty' => true)),
      'vocero'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'tipovoceria'  => new sfWidgetFormChoice(array('choices' => array('' => '', 'Ninguna' => 'Ninguna', 'Politico-Social' => 'Politico-Social', 'Productiva' => 'Productiva', 'Comunicacional' => 'Comunicacional', 'Salud' => 'Salud', 'Educativa' => 'Educativa'))),
      'psuv'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'rev'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'polop'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'No' => 'No', 'Si' => 'Si'))),
      'habilidades'  => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'ci'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'apellido'     => new sfValidatorPass(array('required' => false)),
      'fnacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexo'         => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'estado_civ'   => new sfValidatorChoice(array('required' => false, 'choices' => array('Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Conviviente' => 'Conviviente'))),
      'hijos'        => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'nhijos'       => new sfValidatorChoice(array('required' => false, 'choices' => array(0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20))),
      'nivelestudio' => new sfValidatorChoice(array('required' => false, 'choices' => array('Ninguno' => 'Ninguno', 'Primaria' => 'Primaria', 'Bachiller' => 'Bachiller', 'Tecnico Medio' => 'Tecnico Medio', 'TSU' => 'TSU', 'Universitario' => 'Universitario', 'Post-Grado' => 'Post-Grado', 'Maestria' => 'Maestria', 'Doctorado' => 'Doctorado'))),
      'ocupacion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ocupacion'), 'column' => 'id')),
      'asignacion'   => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'organismo'    => new sfValidatorPass(array('required' => false)),
      'foto'         => new sfValidatorPass(array('required' => false)),
      'estado_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'municipio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'parroquia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquia'), 'column' => 'id')),
      'direccion'    => new sfValidatorPass(array('required' => false)),
      'telf1'        => new sfValidatorPass(array('required' => false)),
      'telf2'        => new sfValidatorPass(array('required' => false)),
      'mail1'        => new sfValidatorPass(array('required' => false)),
      'familiar'     => new sfValidatorPass(array('required' => false)),
      'telf_fam'     => new sfValidatorPass(array('required' => false)),
      'fallecido'    => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'comite_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Comite'), 'column' => 'id')),
      'vocero'       => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'tipovoceria'  => new sfValidatorChoice(array('required' => false, 'choices' => array('Ninguna' => 'Ninguna', 'Politico-Social' => 'Politico-Social', 'Productiva' => 'Productiva', 'Comunicacional' => 'Comunicacional', 'Salud' => 'Salud', 'Educativa' => 'Educativa'))),
      'psuv'         => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'rev'          => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'polop'        => new sfValidatorChoice(array('required' => false, 'choices' => array('No' => 'No', 'Si' => 'Si'))),
      'habilidades'  => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('adulto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Adulto';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'ci'           => 'Number',
      'nombre'       => 'Text',
      'apellido'     => 'Text',
      'fnacimiento'  => 'Date',
      'sexo'         => 'Enum',
      'estado_civ'   => 'Enum',
      'hijos'        => 'Enum',
      'nhijos'       => 'Enum',
      'nivelestudio' => 'Enum',
      'ocupacion_id' => 'ForeignKey',
      'asignacion'   => 'Enum',
      'organismo'    => 'Text',
      'foto'         => 'Text',
      'estado_id'    => 'ForeignKey',
      'municipio_id' => 'ForeignKey',
      'parroquia_id' => 'ForeignKey',
      'direccion'    => 'Text',
      'telf1'        => 'Text',
      'telf2'        => 'Text',
      'mail1'        => 'Text',
      'familiar'     => 'Text',
      'telf_fam'     => 'Text',
      'fallecido'    => 'Enum',
      'comite_id'    => 'ForeignKey',
      'vocero'       => 'Enum',
      'tipovoceria'  => 'Enum',
      'psuv'         => 'Enum',
      'rev'          => 'Enum',
      'polop'        => 'Enum',
      'habilidades'  => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'deleted_at'   => 'Date',
    );
  }
}
