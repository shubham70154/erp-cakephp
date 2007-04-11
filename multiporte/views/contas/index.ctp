<div class="contas">
<h2>List Contas</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th>A&ccedil;&otilde;es</th>
	</tr>
<?php foreach ($contas as $conta): ?>
	<tr>
		<td><?php echo $conta['Conta']['id']; ?></td>
		<td><?php echo $conta['Conta']['nome']; ?></td>
		<td><?php echo $conta['Conta']['descricao']; ?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('action'=>'view', $conta['Conta']['id'])); ?>
			<?php echo $html->link('Editar', array('action'=>'edit', $conta['Conta']['id'])); ?>
			<?php echo $html->link('Excluir', array('action'=>'delete', $conta['Conta']['id']), null, utf8_encode('Você tem certeza que deseja excluir a conta #') . $conta['Conta']['id'] . utf8_encode('?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>
<div class="paging">
<?php echo $paginator->prev('<< anterior', array(), null, array('class'=>'disabled'));?>
 |
<?php echo $paginator->next(utf8_encode('próxima >>'), array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Nova Conta', array('action'=>'add')); ?></li>
	</ul>
</div>