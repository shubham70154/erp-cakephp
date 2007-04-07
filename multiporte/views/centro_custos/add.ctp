<div class="centrocusto">
<h2>New Centro Custo</h2>
	<?php echo $form->create('CentroCusto');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Add');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('List Centro Custos', array('action'=>'index')); ?></li>
	</ul>
</div>
