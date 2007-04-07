<?php
class Conta extends AppModel {

	var $name = 'Conta';
	var $validate = array(
		'nome' => VALID_NOT_EMPTY,
	);
	var $displayField = 'nome';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Lancamento'
	);

}
?>