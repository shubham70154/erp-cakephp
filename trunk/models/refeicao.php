<?php

class Refeicao extends AppModel {
  var $name = 'Refeicao';
  
  var $belongsTo = array('Funcionario', 'Restaurante');
}

?>