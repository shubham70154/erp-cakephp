<div class="conta">
<h2>New Conta</h2>
	<?php echo $form->create('Conta');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Add');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('List Contas', array('action'=>'index')); ?></li>
	</ul>
</div>
