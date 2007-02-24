<?php

class ObrasController extends AppController {
  var $name = 'Obras';
  var $helpers = array('Format', 'Form', 'Session');

  function detalhes($id = null) {
    if ($id != null) {
      $this->Obra->id = $id;
      $this->set('data', $this->Obra->read());
    }
  }

  function alterar($id = null) {
    if ($id != null) {
      $this->Obra->id = $id;
      if (!empty($this->data)) {
        if ($this->Obra->save($this->data)) {
          $this->Session->setFlash('Obra alterado.');
          $this->redirect('/clientes/detalhes/' . $this->data['Obra']['cliente_id']);
        } else {
          $this->set('data', $this->data);
          $this->set('fieldNames', $this->generateFieldNames($this->data));
        }
      } else {
        $this->data = $this->Obra->read();
        $this->set('data', $this->data);
        $this->set('fieldNames', $this->generateFieldNames($this->data));
      }
    }
  }

  function excluir($id = null) {
    if ($id != null) {
      $this->Obra->id = $id;
      $data = $this->Obra->read();
      if ($this->Obra->del($id)) {
        $this->Session->setFlash('Obra exclu&iacute;da.');
      } else {
        $this->Session->setFlash('Erro ao excluir obra.');
      }
      $this->redirect('/clientes/detalhes/' . $data['Obra']['cliente_id']);
    }
  }

  function adicionar($cliente_id = null) {
    if (!empty($this->data)) {
      if ($this->Obra->save($this->data)) {
        $this->Session->setFlash('Obra inclu&iacute;da.');
        $this->redirect('/clientes/detalhes/' . $this->data['Obra']['cliente_id']);
      } else {
        $this->set('data', $this->data);
      }
    }
    $this->data['Obra']['id'] = 0;
    $this->data['Obra']['cliente_id'] = $cliente_id;
    $this->set('data', $this->data);
    $this->set('fieldNames', $this->generateFieldNames($this->data));
  }

}

?>