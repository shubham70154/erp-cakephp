<?php

class ObrasFuncionariosController extends AppController {
  var $name = 'ObrasFuncionarios';
  var $scaffold;
  
  var $uses = array('Obra', 'Funcionario', 'ObrasFuncionario');
}

?>