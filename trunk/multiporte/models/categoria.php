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
    $lista = $this->__findSubCategorias(0);
    return $lista;
  }
  
  function __findSubCategorias($categoria_id) {
    $this->recursive = 0;
    if ($categoria_id == 0) {
      $temp = $this->findAll('Categoria.categoria_pai_id IS NULL', null, 'Categoria.nome ASC');      
    } else {
      $temp = $this->findAll("Categoria.categoria_pai_id = '$categoria_id'", null, 'Categoria.nome ASC');
    }
    $subs = array();
    if (is_array($temp)) {
      foreach ($temp as $valor) {
        $subs[] = array(
                    'id' => $valor['Categoria']['id'],
                    'nome' => $valor['Categoria']['nome'],
                    'tipo' => $valor['Categoria']['tipo'],
                    'subs' => $this->__findSubCategorias($valor['Categoria']['id'])
                  );
      }
    }
    return $subs;
  }
}

?>