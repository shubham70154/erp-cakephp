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
}

?>