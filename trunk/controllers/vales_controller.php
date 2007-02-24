<?php

class ValesController extends AppController {
  var $name = 'Vales';
  var $scaffold;
  
  var $uses = array('Vale', 'Funcionario');
}

?>