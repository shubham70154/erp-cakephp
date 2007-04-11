<div class="grupoCategoria">
<h2>Editar Grupo de Categoria</h2>
	<?php echo $form->create('GrupoCategoria');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('sub_grupo_id');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Salvar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Excluir', array('action'=>'delete', $html->tagValue('GrupoCategoria/id')), null, 'Você tem certeza que deseja excluir o grupo #' . $html->tagValue('GrupoCategoria/id') . '?'); ?>
		<li><?php echo $html->link('Listar Grupo de Categorias', array('action'=>'index')); ?></li>
	</ul>
</div>
