<?php

class FuncionariosController extends AppController {
  var $name = 'Funcionarios';
  var $helpers = array('Format', 'Form', 'Session');

  function index() {
    $this->Funcionario->recursive = -1;
    $this->data = $this->Funcionario->findAll(null, null, 'Funcionario.nome ASC');
    $this->set('data', $this->data);
  }

  function detalhes($id = null) {
    if ($id != null) {
      $this->Funcionario->id = $id;
      $this->set('data', $this->Funcionario->read());
    }
  }

  function alterar($id = null) {
    if ($id != null) {
      $this->Funcionario->recursive = -1;
      $this->Funcionario->id = $id;
      if (!empty($this->data['Funcionario'])) {
        if ($this->Funcionario->save($this->data)) {
          $this->Session->setFlash('Funcion&aacute;rio alterado.');
          $this->redirect('/funcionarios/');
        } else {
          $this->set('data', $this->data);
          $this->set('fieldNames', $this->generateFieldNames($this->data));
        }
      } else {
        $this->data = $this->Funcionario->read();
        $this->set('data', $this->data);
        $this->set('fieldNames', $this->generateFieldNames($this->data));
      }
    }
  }

  function excluir($id = null) {
    if ($id != null) {
      if ($this->Funcionario->del($id)) {
        $this->Session->setFlash('Funcion&aacute;rio exclu&iacute;do.');
      } else {
        $this->Session->setFlash('Erro ao excluir funcion&aacute;rio.');
      }
      $this->redirect('/funcionarios/');
    }
  }

  function adicionar() {
    if (!empty($this->data)) {
      if ($this->Funcionario->save($this->data)) {
        $this->Session->setFlash('Funcion&aacute;rio inclu&iacute;do.');
        $this->redirect('/funcionarios/');
      } else {
        $this->set('data', $this->data);
      }
    }
    $this->data['Funcionario']['id'] = 0;
    $this->set('fieldNames', $this->generateFieldNames($this->data));
  }

}

?>