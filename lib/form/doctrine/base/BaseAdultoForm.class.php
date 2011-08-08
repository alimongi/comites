<?php

/**
 * Adulto form base class.
 *
 * @method Adulto getObject() Returns the current form's model object
 *
 * @package    inasscomite
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdultoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'ci'           => new sfWidgetFormInputText(),
      'nombre'       => new sfWidgetFormInputText(),
      'apellido'     => new sfWidgetFormInputText(),
      'fnacimiento'  => new sfWidgetFormDate(),
      'sexo'         => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'estado_civ'   => new sfWidgetFormChoice(array('choices' => array('Solter@' => 'Solter@', 'Casad@' => 'Casad@', 'Viud@' => 'Viud@', 'Divorciad@' => 'Divorciad@', 'Separad@' => 'Separad@', 'Conviviente' => 'Conviviente'))),
      'estado_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'), 'add_empty' => false)),
      'municipio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'), 'add_empty' => false)),
      'parroquia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'), 'add_empty' => false)),
      'direccion'    => new sfWidgetFormInputText(),
      'telf1'        => new sfWidgetFormInputText(),
      'telf2'        => new sfWidgetFormInputText(),
      'mail1'        => new sfWidgetFormInputText(),
      'familiar'     => new sfWidgetFormInputText(),
      'telf_fam'     => new sfWidgetFormInputText(),
      'fallecido'    => new sfWidgetFormChoice(array('choices' => array('No' => 'No', 'Si' => 'Si'))),
      'comite_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'), 'add_empty' => false)),
      'vocero'       => new sfWidgetFormChoice(array('choices' => array('No' => 'No', 'Si' => 'Si'))),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'deleted_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ci'           => new sfValidatorInteger(),
      'nombre'       => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'apellido'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'fnacimiento'  => new sfValidatorDate(),
      'sexo'         => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'))),
      'estado_civ'   => new sfValidatorChoice(array('choices' => array(0 => 'Solter@', 1 => 'Casad@', 2 => 'Viud@', 3 => 'Divorciad@', 4 => 'Separad@', 5 => 'Conviviente'))),
      'estado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estado'))),
      'municipio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Municipio'))),
      'parroquia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parroquia'))),
      'direccion'    => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telf1'        => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telf2'        => new sfValidatorString(array('max_length' => 120, 'min_length' => 0, 'required' => false)),
      'mail1'        => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'familiar'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'telf_fam'     => new sfValidatorString(array('max_length' => 120, 'min_length' => 4)),
      'fallecido'    => new sfValidatorChoice(array('choices' => array(0 => 'No', 1 => 'Si'))),
      'comite_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Comite'))),
      'vocero'       => new sfValidatorChoice(array('choices' => array(0 => 'No', 1 => 'Si'))),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'deleted_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Adulto', 'column' => array('ci')))
    );

    $this->widgetSchema->setNameFormat('adulto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Adulto';
  }

}
