<?php

class Categoria extends AppModel {
  var $name = 'Categoria';
  var $displayField = 'nome';
  
  var $hasMany = array(
    'Lancamento',
    'SubCategoria' => array(
                        'className' => 'Categoria',
                        'foreignKey' => 'categoria_pai_id',
                        'dependent' => true
                      )
  );
  
  var $validade = array(
    'tipo' => '/(entrada)|(saida)/'
  );
  
  function gerarLista() {
    $this->recursive = 20;
    $this->unbindModel(array('hasMany' => array('Lancamento')));
    $lista = $this->findAll('Categoria.categoria_pai_id IS NULL', null, 'Categoria.nome ASC');
    return $lista;
  }
}

?>