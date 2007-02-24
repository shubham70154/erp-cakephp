<?php

class ObrasController extends AppController {
  var $name = 'Obras';
  var $scaffold;
  
  var $uses = array('Obra', 'Cliente');
}

?>