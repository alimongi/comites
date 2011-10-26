<?php

/**
 * Consejocomunal form base class.
 *
 * @method Consejocomunal getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConsejocomunalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'codigo'       => new sfWidgetFormInputText(),
      'nombre'       => new sfWidgetFormInputText(),
      'estado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'municipio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'parroquia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => false)),
      'sector'       => new sfWidgetFormInputText(),
      'activo'       => new sfWidgetFormInputCheckbox(),
      'contacto'     => new sfWidgetFormInputText(),
      'telefono'     => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'deleted_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'       => new sfValidatorString(array('max_length' => 30)),
      'nombre'       => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'estado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'municipio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'parroquia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'))),
      'sector'       => new sfValidatorString(array('max_length' => 80, 'min_length' => 4, 'required' => false)),
      'activo'       => new sfValidatorBoolean(array('required' => false)),
      'contacto'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telefono'     => new sfValidatorString(array('max_length' => 30, 'min_length' => 11)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'deleted_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Consejocomunal', 'column' => array('codigo')))
    );

    $this->widgetSchema->setNameFormat('consejocomunal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Consejocomunal';
  }

}
