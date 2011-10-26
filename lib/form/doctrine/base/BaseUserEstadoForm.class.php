<?php

/**
 * UserEstado form base class.
 *
 * @method UserEstado getObject() Returns the current form's model object
 *
 * @package    inasscentros
 * @subpackage form
 * @author     Alexis Limongi
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserEstadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'   => new sfWidgetFormInputHidden(),
      'estado_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'user_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'estado_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('estado_id')), 'empty_value' => $this->getObject()->get('estado_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserEstado';
  }

}
