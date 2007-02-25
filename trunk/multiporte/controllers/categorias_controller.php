<?php

class CategoriasController extends AppController {
  var $name = 'Categorias';
  
  var $uses = array('Categoria');
  var $scaffold;
  
  function lista() {
    $this->set('data', $this->Categoria->gerarLista());
  }
}

?>