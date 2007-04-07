<div class="lancamento">
<h2>View Lancamento</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $lancamento['Lancamento']['id']?></dd>
		<dt>CentroCusto</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['CentroCusto']['nome'], array('controller'=> 'centro_custos', 'action'=>'view', $lancamento['CentroCusto']['id'])); ?></dd>
		<dt>Categoria</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['Categoria']['nome'], array('controller'=> 'categorias', 'action'=>'view', $lancamento['Categoria']['id'])); ?></dd>
		<dt>Conta</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['Conta']['nome'], array('controller'=> 'contas', 'action'=>'view', $lancamento['Conta']['id'])); ?></dd>
		<dt>Descricao</dt>
		<dd>&nbsp;<?php echo $lancamento['Lancamento']['descricao']?></dd>
		<dt>Data</dt>
		<dd>&nbsp;<?php echo date('d/m/Y', strtotime($lancamento['Lancamento']['data'])); ?></dd>
		<dt>Valor</dt>
		<dd>&nbsp;<?php echo number_format($lancamento['Lancamento']['valor'], 2, ',', '.'); ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Edit Lancamento',   array('action'=>'edit', $lancamento['Lancamento']['id'])); ?> </li>
		<li><?php echo $html->link('Delete Lancamento', array('action'=>'delete', $lancamento['Lancamento']['id']), null, 'Are you sure you want to delete #' . $lancamento['Lancamento']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('List Lancamentos', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Lancamento',	array('action'=>'add')); ?> </li>
		<li><?php echo $html->link('List Centro Custo', array('controller'=> 'centro_custos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Centro Custos', array('controller'=> 'centro_custos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link('List Categoria', array('controller'=> 'categoria', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Categorias', array('controller'=> 'categoria', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link('List Conta', array('controller'=> 'conta', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Contas', array('controller'=> 'conta', 'action'=>'add')); ?> </li>
	</ul>

</div>
