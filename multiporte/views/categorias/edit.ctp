<div class="categoria">
<h2>Editar Categoria</h2>
	<?php echo $form->create('Categoria');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('grupo_categoria_id', array('options' => $grupoCategorias));?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('tipo', array('type' => 'select', 'options' => array('Saida' => 'Saida', 'Entrada' => 'Entrada')));?>
		<?php echo $form->submit('Salvar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Excluir', array('action'=>'delete', $html->tagValue('Categoria/id')), null, utf8_encode('Você tem certeza que deseja excluir a categoria #') . $html->tagValue('Categoria/id') . utf8_encode('?')); ?>
		<li><?php echo $html->link('Listar Categorias', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('Mostrar Grupo de Categorias', array('controller'=> 'grupo_categorias', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Adicionar Grupo de Categorias', array('controller'=> 'grupo_categorias', 'action'=>'add')); ?></li>
	</ul>
</div>
