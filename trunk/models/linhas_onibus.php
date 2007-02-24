<?php

class LinhasOnibus extends AppModel {
  var $name = 'LinhasOnibus';
  var $displayField = 'nome';
  
  var $hasMany = array('ValeTransporte');
  var $belongsTo = array('EmpresaOnibus');
}

?>