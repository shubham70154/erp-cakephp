<?php

class Cliente extends AppModel {
  var $name = 'Cliente';
  var $displayField = 'nome';

  var $hasMany = array('Obra');

  var $validate = array(
    'cep' => '/[0-9]{5}\-[0-9]{3}/',
    'cpf_cnpj' => '/([0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2})|([0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2})/',
    'fone' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/',
    'celular' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/'
  );

}
?>