<div class="centroCusto">
<h2>Mostrando Centro de Custo</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['id']; ?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['nome']; ?></dd>
		<dt>Descri&ccedil;&atilde;o</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['descricao']; ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Centro de Custo',   array('action'=>'edit', $centroCusto['CentroCusto']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Centro de Custo', array('action'=>'delete', $centroCusto['CentroCusto']['id']), null, utf8_encode('Você tem certeza que deseja excluir o centro de custo #') . $centroCusto['CentroCusto']['id'] . utf8_encode('?')); ?> </li>
		<li><?php echo $html->link('Listar Centros de Custo', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Novo Centro de Custo', array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Lançamentos Relacionados</h3>
<?php if(!empty($centroCusto['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo</th>
		<th>Categoria</th>
		<th>Conta</th>
		<th>Descri&ccedil;&atilde;o</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>A&ccedil;&otilde;es</th>
	</tr>
<?php foreach($centroCusto['Lancamento'] as $lancamento):?>
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
			<?php echo $html->link('Excluir', array('controller'=> 'lancamentos', 'action'=>'delete', $lancamento['id']), null, utf8_encode('Você tem certeza que deseja excluir o lançamento #') . $lancamento['id'] . utf8_encode('?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('Novo Lancamento', array('controller'=> 'lancamentos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
