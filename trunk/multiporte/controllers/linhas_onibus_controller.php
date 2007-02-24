 <?php

class LinhasOnibusController extends AppController {
  var $name = 'LinhasOnibus';
  
  var $uses = array('EmpresaOnibus', 'LinhasOnibus', 'Funcionario');
  var $scaffold;
}

?>