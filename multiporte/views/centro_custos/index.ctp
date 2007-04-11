<div class="centroCustos">
<h2>Lista dos Centros de Custo</h2>

<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('nome');?></th>
		<th><?php echo $paginator->sort('descricao');?></th>
		<th>A&ccedil;&otilde;es</th>
	</tr>
<?php foreach ($centroCustos as $centroCusto): ?>
	<tr>
		<td><?php echo $centroCusto['CentroCusto']['id']; ?></td>
		<td><?php echo $centroCusto['CentroCusto']['nome']; ?></td>
		<td><?php echo $centroCusto['CentroCusto']['descricao']; ?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('action'=>'view', $centroCusto['CentroCusto']['id'])); ?>
			<?php echo $html->link('Editar', array('action'=>'edit', $centroCusto['CentroCusto']['id'])); ?>
			<?php echo $html->link('Excluir', array('action'=>'delete', $centroCusto['CentroCusto']['id']), null, utf8_encode('Você tem certeza que deseja excluir o centro de custo #') . $centroCusto['CentroCusto']['id'] . utf8_encode('?')); ?>
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
		<li><?php echo $html->link('Novo Centro de Custo', array('action'=>'add')); ?></li>
	</ul>
</div>