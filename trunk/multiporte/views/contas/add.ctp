<div class="conta">
<h2>Nova Conta</h2>
	<?php echo $form->create('Conta');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Adicionar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Listar Contas', array('action'=>'index')); ?></li>
	</ul>
</div>
