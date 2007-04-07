<div class="lancamento">
<h2>Edit Lancamento</h2>
	<?php echo $form->create('Lancamento');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('centro_custo_id', array('options' => $centroCustos));?>
		<?php echo $form->input('categoria_id', array('options' => $categorias));?>
		<?php echo $form->input('conta_id', array('options' => $contas));?>
		<?php echo $form->input('descricao', array('class' => 'required'));?>
		<?php echo $form->input('data');?>
		<?php echo $form->input('valor', array('class' => 'required'));?>
		<?php echo $form->submit('Update');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Delete', array('action'=>'delete', $html->tagValue('Lancamento/id')), null, 'Are you sure you want to delete #' . $html->tagValue('Lancamento/id')); ?>
		<li><?php echo $html->link('List Lancamentos', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('View Centro Custos', array('controller'=> 'centro_custos', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Add Centro Custos', array('controller'=> 'centro_custos', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('View Contas', array('controller'=> 'conta', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Add Contas', array('controller'=> 'conta', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('View Categorias', array('controller'=> 'categoria', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Add Categorias', array('controller'=> 'categoria', 'action'=>'add')); ?></li>
	</ul>
</div>
