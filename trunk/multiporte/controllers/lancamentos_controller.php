<?php

class LancamentosController extends AppController {
  var $name = 'Lancamentos';
  
  var $uses = array('Conta', 'Lancamento', 'Categoria');
  var $scaffold;
  var $helpers = array('Html', 'Form');
  
  function add() {
    $fieldNames = $this->generateFieldNames();
    
    $this->set('fieldNames', $fieldNames);
    $this->set('categorias', $this->Categoria->gerarLista());
  }
}

?>