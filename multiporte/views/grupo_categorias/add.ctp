<div class="grupocategoria">
<h2>Novo Grupo de Categoria</h2>
	<?php echo $form->create('GrupoCategoria');?>
		<?php echo $form->input('sub_grupo_id');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Adicionar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Listar Grupo de Categorias', array('action'=>'index')); ?></li>
	</ul>
</div>
