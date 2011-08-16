<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchForm
 *
 * @author alimongi
 */
class SearchForm extends sfForm {

    public function  configure() {

      $this->widgetSchema['fecha_inicial']= new sfWidgetFormDateJQueryUI(array("culture" => "es", "change_month" => true, "change_year" => true, "theme" => "/sfJQueryUIPlugin/css/smoothness/jquery-ui-1.7.3.custom.css"));
      $this->widgetSchema['fecha_final']= new sfWidgetFormDateJQueryUI(array("culture" => "es", "change_month" => true, "change_year" => true, "theme" => "/sfJQueryUIPlugin/css/smoothness/jquery-ui-1.7.3.custom.css"));
    }
}
?>
