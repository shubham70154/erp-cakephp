<?php

class Obra extends AppModel {
  var $name = 'Obra';
  var $displayField = 'local';

  var $belongsTo = array('Cliente');
  var $hasMany = array('Titulo', 'ObrasFuncionario');

}

?>