<?php

class Cargo extends AppModel {
  var $name = 'Cargo';
  var $displayField = 'descricao';

  var $hasMany = array('Funcionario');
}
?>