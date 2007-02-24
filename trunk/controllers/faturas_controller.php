<?php

class FaturasController extends AppController {
  var $name = 'Faturas';
  
  var $uses = array('Fatura', 'Fornecedor');
  var $scaffold;
}

?>