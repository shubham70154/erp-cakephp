<?php

class FaltasController extends AppController {
  var $name = 'Faltas';
  var $scaffold;
  
  var $uses = array('Falta', 'Funcionario');
}

?>