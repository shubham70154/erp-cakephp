<?php

class RefeicoesController extends AppController {
  var $name = 'Refeicoes';
  var $scaffold;
  
  var $uses = array('Refeicao', 'Restaurante');
}

?>