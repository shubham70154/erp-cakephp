<?php

class ValeTransporte extends AppModel {
  var $name = 'ValeTransporte';

  var $belongsTo = array('Funcionario', 'LinhasOnibus');
}

?>