<?php

class FornecedoresController extends AppController {
  var $name = 'Fornecedores';
  
  var $uses = array('Fornecedor', 'Fatura');
  var $scaffold;
}

?>