<?php

class CategoriasController extends AppController {
  var $name = 'Categorias';
  
  var $uses = array('Categoria');
  var $scaffold;
  var $helpers = array('Format');
  
  function lista() {
    $this->set('data', $this->Categoria->gerarLista());
  }
}

?>