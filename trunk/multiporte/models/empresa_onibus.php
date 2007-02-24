<?php

class EmpresaOnibus extends AppModel {
  var $name = 'EmpresaOnibus';
  var $displayField = 'nome';
  
  var $hasMany = array('LinhasOnibus');
}

?>