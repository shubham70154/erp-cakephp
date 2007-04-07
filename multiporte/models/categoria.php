<?php
class Categoria extends AppModel {

	var $name = 'Categoria';
	var $validate = array(
		'grupo_categoria_id' => VALID_NUMBER,
		'nome' => VALID_NOT_EMPTY,
		'tipo' => '/(Entrada)|(Saida)/',
	);
	var $displayField = 'nome';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'GrupoCategoria'
	);
	
	var $hasMany = array(
			'Lancamento'
	);

}
?>