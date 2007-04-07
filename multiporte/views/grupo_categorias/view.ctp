<div class="grupoCategoria">
<h2>View Grupo Categoria</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['id']?></dd>
		<dt>Grupo Pai</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['SubGrupoPai']['nome']?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['nome']?></dd>
		<dt>Descricao</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['descricao']?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Edit Grupo Categoria',   array('action'=>'edit', $grupoCategoria['GrupoCategoria']['id'])); ?> </li>
		<li><?php echo $html->link('Delete Grupo Categoria', array('action'=>'delete', $grupoCategoria['GrupoCategoria']['id']), null, 'Are you sure you want to delete #' . $grupoCategoria['GrupoCategoria']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('List Grupo Categorias', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('New Grupo Categoria',	array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Related Sub Grupos</h3>
<?php if(!empty($grupoCategoria['SubGrupo'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Actions</th>
	</tr>
<?php foreach($grupoCategoria['SubGrupo'] as $subGrupo):?>
	<tr>
		<td><?php echo $subGrupo['id'];?></td>
		<td><?php echo $subGrupo['nome'];?></td>
		<td><?php echo (empty($subGrupo['descricao']) ? "&nbsp;" : $subGrupo['descricao']);?></td>
		<td><?php echo date('d/m/Y', strtotime($subGrupo['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($subGrupo['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('View', array('controller'=> 'grupo_categorias', 'action'=>'view', $subGrupo['id'])); ?>
			<?php echo $html->link('Edit', array('controller'=> 'grupo_categorias', 'action'=>'edit', $subGrupo['id'])); ?>
			<?php echo $html->link('Delete', array('controller'=> 'grupo_categorias', 'action'=>'delete', $subGrupo['id']), null, 'Are you sure you want to delete #' . $subGrupo['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('New Sub Grupo', array('controller'=> 'grupo_categorias', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
<h3>Related Categorias</h3>
<?php if(!empty($grupoCategoria['Categoria'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Grupo Categoria</th>
		<th>Nome</th>
		<th>Tipo</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Actions</th>
	</tr>
<?php foreach($grupoCategoria['Categoria'] as $categoria):?>
	<tr>
		<td><?php echo $categoria['id'];?></td>
		<td><?php echo $categoria['GrupoCategoria']['nome'];?></td>
		<td><?php echo $categoria['nome'];?></td>
		<td><?php echo $categoria['tipo'];?></td>
		<td><?php echo date('d/m/Y', strtotime($categoria['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($categoria['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('View', array('controller'=> 'categorias', 'action'=>'view', $categoria['id'])); ?>
			<?php echo $html->link('Edit', array('controller'=> 'categorias', 'action'=>'edit', $categoria['id'])); ?>
			<?php echo $html->link('Delete', array('controller'=> 'categorias', 'action'=>'delete', $categoria['id']), null, 'Are you sure you want to delete #' . $categoria['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('New Categoria', array('controller'=> 'categorias', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
