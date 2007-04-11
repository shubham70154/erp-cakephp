<div class="lancamento">
<h2>Novo Lançamento</h2>
	<?php echo $form->create('Lancamento');?>
		<?php echo $form->input('centro_custo_id', array('options' => $centroCustos));?>
		<?php echo $form->input('categoria_id', array('options' => $categorias));?>
		<?php echo $form->input('conta_id', array('options' => $contas));?>
		<?php echo $form->input('descricao', array('class' => 'required'));?>
		<?php echo $form->input('data');?>
		<?php echo $form->input('valor', array('class' => 'required'));?>
		<?php echo $form->submit('Adicionar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Listar Lancamentos', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('Mostrar Centro de Custos', array('controller'=> 'centro_custos', 'action'=>'view'));?></li>
		<li><?php echo $html->link('Adicionar Centro de Custos', array('controller'=> 'centro_custos', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('Mostrar Contas', array('controller'=> 'contas', 'action'=>'view'));?></li>
		<li><?php echo $html->link('Adicionar Contas', array('controller'=> 'contas', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('Mostrar Categorias', array('controller'=> 'categorias', 'action'=>'view'));?></li>
		<li><?php echo $html->link('Adicionar Categorias', array('controller'=> 'categorias', 'action'=>'add')); ?></li>
	</ul>
</div>
