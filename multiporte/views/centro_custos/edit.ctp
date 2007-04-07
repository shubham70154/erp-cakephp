<div class="centroCusto">
<h2>Editar Centro de Custo</h2>
	<?php echo $form->create('CentroCusto');?>
		<?php echo $form->input('id');?>
		<?php echo utf8_decode($form->input('nome', array('class' => 'required')));?>
		<?php echo utf8_decode($form->input('descricao'));?>
		<?php echo $form->submit('Salvar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Excluir', array('action'=>'delete', $html->tagValue('CentroCusto/id')), null, 'Você tem certeza que deseja excluir o centro de custo #' . $html->tagValue('CentroCusto/id') . '?'); ?>
		<li><?php echo $html->link('Listar Centro de Custos', array('action'=>'index')); ?></li>
	</ul>
</div>
