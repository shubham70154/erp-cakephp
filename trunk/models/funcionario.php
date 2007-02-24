<?php

class Funcionario extends AppModel {
  var $name = 'Funcionario';
  var $displayField = 'nome';

  var $belongsTo = array('Cargo');
  var $hasMany = array('ObrasFuncionario', 'ValeTransporte', 'Refeicao', 'BancoHora', 'Epi', 'Vale', 'Falta');

  var $validate = array(
    'cep' => '/[0-9]{5}\-[0-9]{3}/',
    'cpf' => '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/',
    'fone' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/',
    'celular' => '/(\([0-9]{2}\) [0-9]{4}\-[0-9]{4})|()/'
  );

}
?>