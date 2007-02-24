<?php

class Fornecedor extends AppModel {
  var $name = 'Fornecedor';
  var $displayField = 'nome';
  
  var $hasMany = array('Fatura');
  
  var $validate = array(
    'cep' => '/[0-9]{5}\-[0-9]{3}/',
    'cpf_cnpj' => '/([0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2})|([0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2})/',
    'fone' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/',
    'celular' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/'
  );

}

?>