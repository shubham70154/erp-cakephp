<div class="centrocusto">
<h2>Novo Centro de Custo</h2>
	<?php echo $form->create('CentroCusto');?>
		<?php echo $form->input('nome', array('class' => 'required'));?>
		<?php echo $form->input('descricao');?>
		<?php echo $form->submit('Adicionar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Listar Centro de Custos', array('action'=>'index')); ?></li>
	</ul>
</div>
