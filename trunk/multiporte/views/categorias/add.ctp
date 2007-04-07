<div class="categoria">
<h2>Nova Categoria</h2>
	<?php echo $form->create('Categoria');?>
		<?php echo $form->input('grupo_categoria_id', array('options' => $grupoCategorias));?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('tipo', array('type' => 'select', 'options' => array('Saida' => 'Saida', 'Entrada' => 'Entrada')));?>
		<?php echo $form->submit('Adicionar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Listar Categorias', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('Mostrar Grupo de Categorias', array('controller'=> 'grupo_categorias', 'action'=>'view'));?></li>
		<li><?php echo $html->link('Adicionar Grupo de Categorias', array('controller'=> 'grupo_categorias', 'action'=>'add')); ?></li>
	</ul>
</div>
