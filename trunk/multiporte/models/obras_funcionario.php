<?php

class ObrasFuncionario extends AppModel {
  var $name = 'ObrasFuncionario';
  
  var $belongsTo = array('Obra', 'Funcionario');
}

?>