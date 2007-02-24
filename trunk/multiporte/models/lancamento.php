<?php

class Lancamento extends AppModel {
  var $name = 'Lancamento';
  
  var $belongsTo = array('Conta', 'Categoria');
  
  var $validade = array(
    'tipo' => '/(entrada)|(saida)/'
  );
}

?>