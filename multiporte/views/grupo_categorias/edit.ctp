<div class="grupoCategoria">
<h2>Edit Grupo Categoria</h2>
	<?php echo $form->create('GrupoCategoria');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('sub_grupo_id');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Update');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Delete', array('action'=>'delete', $html->tagValue('GrupoCategoria/id')), null, 'Are you sure you want to delete #' . $html->tagValue('GrupoCategoria/id')); ?>
		<li><?php echo $html->link('List Grupo Categorias', array('action'=>'index')); ?></li>
	</ul>
</div>
