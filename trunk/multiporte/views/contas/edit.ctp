<div class="conta">
<h2>Editar Conta</h2>
	<?php echo $form->create('Conta');?>
		<?php echo $form->input('id');?>
		<?php echo utf8_decode($form->input('nome', array('class' => 'required')));?>
		<?php echo utf8_decode($form->input('descricao'));?>
		<?php echo $form->submit('Salvar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Excluir', array('action'=>'delete', $html->tagValue('Conta/id')), null, 'Você tem certeza que deseja excluir a conta #' . $html->tagValue('Conta/id') . '?'); ?>
		<li><?php echo $html->link('Listar Contas', array('action'=>'index')); ?></li>
	</ul>
</div>
