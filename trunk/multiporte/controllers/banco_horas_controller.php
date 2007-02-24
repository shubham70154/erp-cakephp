<?php

class BancoHorasController extends AppController {
  var $name = 'BancoHoras';
  var $scaffold;
  
  var $uses = array('BancoHora', 'Funcionario');
}

?>