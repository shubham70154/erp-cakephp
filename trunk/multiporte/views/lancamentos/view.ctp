<div class="lancamento">
<h2>Mostrando Lançamento</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $lancamento['Lancamento']['id']?></dd>
		<dt>Centro de Custo</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['CentroCusto']['nome'], array('controller'=> 'centro_custos', 'action'=>'view', $lancamento['CentroCusto']['id'])); ?></dd>
		<dt>Categoria</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['Categoria']['nome'], array('controller'=> 'categorias', 'action'=>'view', $lancamento['Categoria']['id'])); ?></dd>
		<dt>Conta</dt>
		<dd>&nbsp;<?php echo $html->link($lancamento['Conta']['nome'], array('controller'=> 'contas', 'action'=>'view', $lancamento['Conta']['id'])); ?></dd>
		<dt>Descri&ccedil;&atilde;o</dt>
		<dd>&nbsp;<?php echo $lancamento['Lancamento']['descricao']?></dd>
		<dt>Data</dt>
		<dd>&nbsp;<?php echo date('d/m/Y', strtotime($lancamento['Lancamento']['data'])); ?></dd>
		<dt>Valor</dt>
		<dd>&nbsp;<?php echo number_format($lancamento['Lancamento']['valor'], 2, ',', '.'); ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Lançamento',   array('action'=>'edit', $lancamento['Lancamento']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Lançamento', array('action'=>'delete', $lancamento['Lancamento']['id']), null, utf8_encode('Você tem certeza que deseja excluir o lançamento #') . $lancamento['Lancamento']['id'] . utf8_encode('?')); ?> </li>
		<li><?php echo $html->link('Listar Lançamentos', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Novo Lançamento',	array('action'=>'add')); ?> </li>
		<li><?php echo $html->link('Listar Centro de Custo', array('controller'=> 'centro_custos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('Novo Centro de Custos', array('controller'=> 'centro_custos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link('Listar Categorias', array('controller'=> 'categoria', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('Nova Categoria', array('controller'=> 'categoria', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link('Listar Contas', array('controller'=> 'conta', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('Nova Conta', array('controller'=> 'conta', 'action'=>'add')); ?> </li>
	</ul>

</div>
