<?php
class Lancamento extends AppModel {

	var $name = 'Lancamento';
	var $validate = array(
		'centro_custo_id' => VALID_NUMBER,
		'categoria_id' => VALID_NUMBER,
		'conta_id' => VALID_NUMBER,
		'descricao' => VALID_NOT_EMPTY,
		'valor' => VALID_NOT_EMPTY,
	);
	var $displayField = 'descricao';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'CentroCusto',
			'Conta',
			'Categoria'
	);

}
?>