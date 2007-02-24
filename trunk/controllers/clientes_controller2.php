<?php

class ClientesController extends AppController {
  var $name = 'Clientes';
  var $helpers = array('Format', 'Form', 'Session');

  function index() {
    $this->Cliente->recursive = -1;
    $this->data = $this->Cliente->findAll(null, null, 'Cliente.nome ASC');
    $this->set('data', $this->data);
  }

  function detalhes($id = null) {
    if ($id != null) {
      $this->Cliente->id = $id;
      $this->set('data', $this->Cliente->read());
    }
  }

  function alterar($id = null) {
    if ($id != null) {
      $this->Cliente->recursive = -1;
      $this->Cliente->id = $id;
      if (!empty($this->data['Cliente'])) {
        if ($this->Cliente->save($this->data)) {
          $this->Session->setFlash('Cliente alterado.');
          $this->redirect('/clientes/');
        } else {
          $this->set('data', $this->data);
          $this->set('fieldNames', $this->generateFieldNames($this->data));
        }
      } else {
        $this->data = $this->Cliente->read();
        $this->set('data', $this->data);
        $this->set('fieldNames', $this->generateFieldNames($this->data));
      }
    }
  }

  function excluir($id = null) {
    if ($id != null) {
      if ($this->Cliente->del($id)) {
        $this->Session->setFlash('Cliente exclu&iacute;do.');
      } else {
        $this->Session->setFlash('Erro ao excluir cliente.');
      }
      $this->redirect('/clientes/');
    }
  }

  function adicionar() {
    if (!empty($this->data)) {
      if ($this->Cliente->save($this->data)) {
        $this->Session->setFlash('Cliente inclu&iacute;do.');
        $this->redirect('/clientes/');
      } else {
        $this->set('data', $this->data);
      }
    }
    $this->data['Cliente']['id'] = 0;
    $this->set('fieldNames', $this->generateFieldNames($this->data));
  }

}

?>