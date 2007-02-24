<?php

class LancamentosController extends AppController {
  var $name = 'Lancamentos';
  
  var $uses = array('Conta', 'Lancamento', 'Categoria');
  var $scaffold;
}

?>