<?php
class categoriasController extends AppController {

	var $name = 'categorias';
	var $helpers = array('Html', 'Form' );
	var $uses = array('Categoria', 'GrupoCategoria');
	var $paginate = array('order' => array('Categoria.grupo_categoria_id' => 'asc', 'Categoria.nome' => 'asc'));

	function index() {
		$this->Categoria->recursive = 0;
		$this->data = $this->paginate();
		foreach($this->data as $chave => $categoria) {
			$this->data[$chave]['GrupoOrigem'] = $this->__gerarOrigemGrupo($categoria);
		}
		$this->set('categorias', $this->data);
	}

	function view($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid Categoria.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->Categoria->recursive = 2;
		$this->data = $this->Categoria->read(null, $id);
		$this->set('grupo_origem', $this->__gerarOrigemGrupo($this->data));
		$this->set('categoria', $this->data);
	}

	function add() {
		if(!empty($this->data)) {
			$this->cleanUpFields();
			$this->Categoria->create();
			if($this->Categoria->save($this->data)) {
				$this->Session->setFlash('The Categoria has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Categoria could not be saved. Please, try again.');
			}
		}
		$grupoCategorias = $this->Categoria->GrupoCategoria->generateList();
		$this->set(compact('grupoCategorias'));
	}

	function edit($id = null) {
		if(!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Categoria');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if(!empty($this->data)) {
			$this->cleanUpFields();
			if($this->Categoria->save($this->data)) {
				$this->Session->setFlash('The Categoria saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The Categoria could not be saved. Please, try again.');
			}
		}
		if(empty($this->data)) {
			$this->data = $this->Categoria->read(null, $id);
		}
		$grupoCategorias = $this->Categoria->GrupoCategoria->generateList();
		$this->set(compact('grupoCategorias'));
	}

	function delete($id = null) {
		if(!$id) {
			$this->Session->setFlash('Invalid id for Categoria');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if($this->Categoria->del($id)) {
			$this->Session->setFlash('Categoria #'.$id.' deleted');
			$this->redirect(array('action'=>'index'), null, true);
		}
	}
	
	function __gerarOrigemGrupo($categoria = null) {
		if (!$categoria) {
			return array();
		}
		$grupo_origem = array(array('id' => $categoria['GrupoCategoria']['id'], 'nome' => $categoria['GrupoCategoria']['nome']));
		$grupo_pai = $categoria['GrupoCategoria']['sub_grupo_id'];
		while ($grupo_pai != 0) {
			$grupo = $this->GrupoCategoria->findById($grupo_pai);
			$grupo_origem[] = array('id' =>$grupo['GrupoCategoria']['id'], 'nome' => $grupo['GrupoCategoria']['nome']);
			$grupo_pai = $grupo['GrupoCategoria']['sub_grupo_id'];
		}	
		return array_reverse($grupo_origem);
	}

}
?>