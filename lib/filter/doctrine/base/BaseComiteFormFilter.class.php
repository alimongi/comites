<?php

/**
 * Comite filter form base class.
 *
 * @package    inasscomite
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseComiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => true)),
      'municipio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => true)),
      'parroquia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => true)),
      'sector'       => new sfWidgetFormFilterInput(),
      'registrado'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'consejo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Consejocomunal'), 'add_empty' => true)),
      'acta'         => new sfWidgetFormFilterInput(),
      'mimetype'     => new sfWidgetFormFilterInput(),
      'latitud'      => new sfWidgetFormFilterInput(),
      'longitud'     => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'estado_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estado'), 'column' => 'id')),
      'municipio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Municipio'), 'column' => 'id')),
      'parroquia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parroquia'), 'column' => 'id')),
      'sector'       => new sfValidatorPass(array('required' => false)),
      'registrado'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'consejo_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Consejocomunal'), 'column' => 'id')),
      'acta'         => new sfValidatorPass(array('required' => false)),
      'mimetype'     => new sfValidatorPass(array('required' => false)),
      'latitud'      => new sfValidatorPass(array('required' => false)),
      'longitud'     => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('comite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comite';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nombre'       => 'Text',
      'estado_id'    => 'ForeignKey',
      'municipio_id' => 'ForeignKey',
      'parroquia_id' => 'ForeignKey',
      'sector'       => 'Text',
      'registrado'   => 'Boolean',
      'consejo_id'   => 'ForeignKey',
      'acta'         => 'Text',
      'mimetype'     => 'Text',
      'latitud'      => 'Text',
      'longitud'     => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'deleted_at'   => 'Date',
    );
  }
}
