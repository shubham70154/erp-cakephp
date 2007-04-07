<div class="conta">
<h2>Edit Conta</h2>
	<?php echo $form->create('Conta');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Update');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Delete', array('action'=>'delete', $html->tagValue('Conta/id')), null, 'Are you sure you want to delete #' . $html->tagValue('Conta/id')); ?>
		<li><?php echo $html->link('List Contas', array('action'=>'index')); ?></li>
	</ul>
</div>
