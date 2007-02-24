<?php

class FuncionariosController extends AppController {
  var $name = 'Funcionarios';
  
  var $uses = array('Funcionario', 'Cargo');
  var $scaffold;
}

?>