<?php
class CentroCustosController extends AppController {

	var $name = 'CentroCustos';
	var $helpers = array('Html', 'Form' );
	var $paginate = array('order' => array('CentroCusto.nome' => 'asc'));

	function index() {
		$this->CentroCusto->recursive = 0;
		$this->set('centroCustos', $this->paginate());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid Centro Custo.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->CentroCusto->recursive = 2;
		$this->set('centroCusto', $this->CentroCusto->read(null, $id));
	}

	function add() {
		if(!empty($this->data)) {
			$this->cleanUpFields();
			$this->CentroCusto->create();
			if($this->CentroCusto->save($this->data)) {
				$this->Session->setFlash('The Centro Custo has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Centro Custo could not be saved. Please, try again.');
			}
		}
	}

	function edit($id = null) {
		if(!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Centro Custo');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if(!empty($this->data)) {
			$this->cleanUpFields();
			if($this->CentroCusto->save($this->data)) {
				$this->Session->setFlash('The Centro Custo saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Centro Custo could not be saved. Please, try again.');
			}
		}
		if(empty($this->data)) {
			$this->data = $this->CentroCusto->read(null, $id);
		}
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Centro Custo');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if($this->CentroCusto->del($id)) {
			$this->Session->setFlash('Centro Custo #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>