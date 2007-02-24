<?php

class Restaurante extends AppModel {
  var $name = 'Restaurante';
  var $displayField = 'nome';
  
  var $hasMany = array('Refeicao');
}

?>