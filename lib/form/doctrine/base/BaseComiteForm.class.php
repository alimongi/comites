<?php

/**
 * Comite form base class.
 *
 * @method Comite getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseComiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInputText(),
      'estado_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'municipio_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'parroquia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => false)),
      'sector'          => new sfWidgetFormInputText(),
      'registrado'      => new sfWidgetFormInputCheckbox(),
      'consejo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Consejocomunal'), 'add_empty' => true)),
      'acta'            => new sfWidgetFormInputText(),
      'tih'             => new sfWidgetFormInputCheckbox(),
      'nombretih'       => new sfWidgetFormInputText(),
      'comuna'          => new sfWidgetFormInputCheckbox(),
      'nombrecomuna'    => new sfWidgetFormInputText(),
      'urbanismo'       => new sfWidgetFormInputCheckbox(),
      'nombreurbanismo' => new sfWidgetFormInputText(),
      'mimetype'        => new sfWidgetFormInputText(),
      'latitud'         => new sfWidgetFormInputText(),
      'longitud'        => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'deleted_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'estado_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'municipio_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'parroquia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'))),
      'sector'          => new sfValidatorString(array('max_length' => 80, 'min_length' => 4, 'required' => false)),
      'registrado'      => new sfValidatorBoolean(array('required' => false)),
      'consejo_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Consejocomunal'), 'required' => false)),
      'acta'            => new sfValidatorString(array('max_length' => 254, 'required' => false)),
      'tih'             => new sfValidatorBoolean(array('required' => false)),
      'nombretih'       => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'comuna'          => new sfValidatorBoolean(array('required' => false)),
      'nombrecomuna'    => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'urbanismo'       => new sfValidatorBoolean(array('required' => false)),
      'nombreurbanismo' => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'mimetype'        => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'latitud'         => new sfValidatorPass(array('required' => false)),
      'longitud'        => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'deleted_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comite';
  }

}
