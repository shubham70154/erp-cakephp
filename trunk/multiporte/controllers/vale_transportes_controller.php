<?php

class ValeTransportesController extends AppController {
  var $name = 'ValeTransportes';
  
  var $uses = array('Funcionario', 'ValeTransporte', 'LinhasOnibus');
  var $scaffold;
}

?>