<?php
class contasController extends AppController {

	var $name = 'contas';
	var $helpers = array('Html', 'Form' );
	var $paginate = array('order' => array('Conta.nome' => 'asc'));

	function index() {
		$this->Conta->recursive = 0;
		$this->set('contas', $this->paginate());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid Conta.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->Conta->recursive = 2;
		$this->set('conta', $this->Conta->read(null, $id));
	}

	function add() {
		if(!empty($this->data)) {
			$this->cleanUpFields();
			$this->Conta->create();
			if($this->Conta->save($this->data)) {
				$this->Session->setFlash('The Conta has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Conta could not be saved. Please, try again.');
			}
		}
	}

	function edit($id = null) {
		if(!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Conta');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if(!empty($this->data)) {
			$this->cleanUpFields();
			if($this->Conta->save($this->data)) {
				$this->Session->setFlash('The Conta saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Conta could not be saved. Please, try again.');
			}
		}
		if(empty($this->data)) {
			$this->data = $this->Conta->read(null, $id);
		}
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Conta');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if($this->Conta->del($id)) {
			$this->Session->setFlash('Conta #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>