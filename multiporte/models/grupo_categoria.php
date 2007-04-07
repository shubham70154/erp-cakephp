<?php
class GrupoCategoria extends AppModel {

	var $name = 'GrupoCategoria';
	var $validate = array(
		'sub_grupo_id' => VALID_NUMBER,
		'nome' => VALID_NOT_EMPTY
	);
	var $displayField = 'nome';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Categoria',
			'SubGrupo' => array(
				'className' => 'GrupoCategoria',
				'foreignKey' => 'sub_grupo_id',
				'dependent' => true
			)
	);
	
	var $belongsTo = array(
			'SubGrupoPai' => array(
				'className' => 'GrupoCategoria',
				'foreignKey' => 'sub_grupo_id',
				'dependent' => true
			)
	);
}
?>