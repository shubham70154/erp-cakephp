<?php

class Titulo extends AppModel {
  var $name = 'Titulo';

  var $belongsTo = array('Obra');
  var $hasMany = array('BaixasRecebida');

}
?>