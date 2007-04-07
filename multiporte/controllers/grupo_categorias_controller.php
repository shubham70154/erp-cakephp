<?php
class GrupoCategoriasController extends AppController {

	var $name = 'GrupoCategorias';
	var $helpers = array('Html', 'Form' );
	var $paginate = array('order' => array('GrupoCategoria.nome' => 'asc'));

	function index() {
		$this->GrupoCategoria->recursive = 0;
		$this->set('grupoCategorias', $this->paginate());
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid Grupo Categoria.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->GrupoCategoria->recursive = 2;
		$this->set('grupoCategoria', $this->GrupoCategoria->read(null, $id));
	}

	function add() {
		if(!empty($this->data)) {
			$this->cleanUpFields();
			$this->GrupoCategoria->create();
			if($this->GrupoCategoria->save($this->data)) {
				$this->Session->setFlash('The Grupo Categoria has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Grupo Categoria could not be saved. Please, try again.');
			}
		}
		$subGrupos = $this->GrupoCategoria->SubGrupo->generateList();
		$this->set(compact('subGrupos'));
	}

	function edit($id = null) {
		if(!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Grupo Categoria');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if(!empty($this->data)) {
			$this->cleanUpFields();
			if($this->GrupoCategoria->save($this->data)) {
				$this->Session->setFlash('The Grupo Categoria saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Grupo Categoria could not be saved. Please, try again.');
			}
		}
		if(empty($this->data)) {
			$this->data = $this->GrupoCategoria->read(null, $id);
		}
		$subGrupos = $this->GrupoCategoria->SubGrupo->generateList();
		$this->set(compact('subGrupos'));
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Grupo Categoria');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if($this->GrupoCategoria->del($id)) {
			$this->Session->setFlash('Grupo Categoria #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}

}
?>