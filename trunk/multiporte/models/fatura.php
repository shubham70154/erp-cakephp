<?php

class Fatura extends AppModel {
  var $name = 'Fatura';
  
  var $belongsTo = array('Fornecedor');
}

?>