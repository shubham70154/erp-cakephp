<?php

class ChequesEmitidosController extends AppController {
  var $name = 'ChequesEmitidos';
  
  var $uses = array('Conta', 'ChequesEmitido');
  var $scaffold;
}

?>