<div class="centroCusto">
<h2>Edit Centro Custo</h2>
	<?php echo $form->create('CentroCusto');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Update');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Delete', array('action'=>'delete', $html->tagValue('CentroCusto/id')), null, 'Are you sure you want to delete #' . $html->tagValue('CentroCusto/id')); ?>
		<li><?php echo $html->link('List Centro Custos', array('action'=>'index')); ?></li>
	</ul>
</div>
