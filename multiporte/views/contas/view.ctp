<div class="conta">
<h2>Mostrando Conta</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $conta['Conta']['id']; ?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $conta['Conta']['nome']; ?></dd>
		<dt>Descrição</dt>
		<dd>&nbsp;<?php echo $conta['Conta']['descricao']; ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Conta',   array('action'=>'edit', $conta['Conta']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Conta', array('action'=>'delete', $conta['Conta']['id']), null, 'Você tem certeza que deseja excluir a conta #' . $conta['Conta']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('Listar Contas', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Nova Conta', array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Lançamentos Relacionados</h3>
<?php if(!empty($conta['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo</th>
		<th>Categoria</th>
		<th>Conta</th>
		<th>Descrição</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>Ações</th>
	</tr>
<?php foreach($conta['Lancamento'] as $lancamento):?>
	<tr>
		<td><?php echo $lancamento['id'];?></td>
		<td><?php echo $lancamento['CentroCusto']['nome'];?></td>
		<td><?php echo $lancamento['Categoria']['nome'];?></td>
		<td><?php echo $lancamento['Conta']['nome'];?></td>
		<td><?php echo $lancamento['descricao'];?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['data']));?></td>
		<td><?php echo number_format($lancamento['valor'], 2, ',', '.'); ?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('controller'=> 'lancamentos', 'action'=>'view', $lancamento['id'])); ?>
			<?php echo $html->link('Editar', array('controller'=> 'lancamentos', 'action'=>'edit', $lancamento['id'])); ?>
			<?php echo $html->link('Excluir', array('controller'=> 'lancamentos', 'action'=>'delete', $lancamento['id']), null, 'Você tem certeza que deseja excluir o lançamento #' . $lancamento['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('Novo Lançamento', array('controller'=> 'lancamentos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
