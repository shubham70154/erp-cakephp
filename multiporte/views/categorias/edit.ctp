<div class="categoria">
<h2>Edit Categoria</h2>
	<?php echo $form->create('Categoria');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('grupo_categoria_id', array('options' => $grupoCategorias));?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('tipo', array('type' => 'select', 'options' => array('Saida' => 'Saida', 'Entrada' => 'Entrada')));?>
		<?php echo $form->submit('Update');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Delete', array('action'=>'delete', $html->tagValue('Categoria/id')), null, 'Are you sure you want to delete #' . $html->tagValue('Categoria/id')); ?>
		<li><?php echo $html->link('List Categorias', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('View Grupo Categorias', array('controller'=> 'grupo_categorias', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Add Grupo Categorias', array('controller'=> 'grupo_categorias', 'action'=>'add')); ?></li>
	</ul>
</div>
