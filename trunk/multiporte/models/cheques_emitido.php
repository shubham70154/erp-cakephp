<?php

class ChequesEmitido extends AppModel {
  var $name = 'ChequesEmitido';
  
  var $belongsTo = array('Conta');
}

?>