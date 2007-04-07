<?php
class LancamentosController extends AppController {

	var $name = 'Lancamentos';
	var $helpers = array('Html', 'Form' );
	var $paginate = array('order' => array('Lancamento.data' => 'desc'));

	function index() {
		$this->Lancamento->recursive = 0;
		$this->set('lancamentos', $this->paginate());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid Lancamento.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->set('lancamento', $this->Lancamento->read(null, $id));
	}

	function add() {
		if(!empty($this->data)) {
			$this->cleanUpFields();
			$this->Lancamento->create();
			if($this->Lancamento->save($this->data)) {
				$this->Session->setFlash('The Lancamento has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Lancamento could not be saved. Please, try again.');
			}
		}
		$centroCustos = $this->Lancamento->CentroCusto->generateList();
		$contas = $this->Lancamento->Conta->generateList();
		$categorias = $this->Lancamento->Categoria->generateList();
		$this->set(compact('centroCustos', 'contas', 'categorias'));
	}

	function edit($id = null) {
		if(!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Lancamento');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if(!empty($this->data)) {
			$this->cleanUpFields();
			if($this->Lancamento->save($this->data)) {
				$this->Session->setFlash('The Lancamento saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Lancamento could not be saved. Please, try again.');
			}
		}
		if(empty($this->data)) {
			$this->data = $this->Lancamento->read(null, $id);
		}
		$centroCustos = $this->Lancamento->CentroCusto->generateList();
		$contas = $this->Lancamento->Conta->generateList();
		$categorias = $this->Lancamento->Categoria->generateList();
		$this->set(compact('centroCustos','contas','categorias'));
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Lancamento');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if($this->Lancamento->del($id)) {
			$this->Session->setFlash('Lancamento #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>