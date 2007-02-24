<?php

class Conta extends AppModel {
  var $name = 'Conta';
  var $displayField = 'descricao';
  
  var $hasMany = array('Lancamento', 'ChequesEmitido');
}

?>