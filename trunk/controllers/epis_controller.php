<?php

class EpisController extends AppController {
  var $name = 'Epis';
  
  var $uses = array('Funcionario', 'Epi');
  var $scaffold;
}

?>