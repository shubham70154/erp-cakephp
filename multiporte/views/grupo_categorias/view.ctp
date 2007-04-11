<div class="grupoCategoria">
<h2>Mostrando Grupo de Categoria</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['id']; ?></dd>
		<dt>Grupo Pai</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['SubGrupoPai']['nome']; ?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['nome']; ?></dd>
		<dt>Descri&ccedil;&atilde;o</dt>
		<dd>&nbsp;<?php echo $grupoCategoria['GrupoCategoria']['descricao']; ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Grupo de Categoria',   array('action'=>'edit', $grupoCategoria['GrupoCategoria']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Grupo de Categoria', array('action'=>'delete', $grupoCategoria['GrupoCategoria']['id']), null, 'Você tem certeza que deseja excluir o grupo #' . $grupoCategoria['GrupoCategoria']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('Listar Grupo de Categorias', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Novo Grupo de Categoria',	array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Sub Grupos</h3>
<?php if(!empty($grupoCategoria['SubGrupo'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Descri&ccedil;&atilde;o</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>A&ccedil;&otilde;es</th>
	</tr>
<?php foreach($grupoCategoria['SubGrupo'] as $subGrupo):?>
	<tr>
		<td><?php echo $subGrupo['id'];?></td>
		<td><?php echo $subGrupo['nome'];?></td>
		<td><?php echo (empty($subGrupo['descricao']) ? "&nbsp;" : $subGrupo['descricao']);?></td>
		<td><?php echo date('d/m/Y', strtotime($subGrupo['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($subGrupo['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('controller'=> 'grupo_categorias', 'action'=>'view', $subGrupo['id'])); ?>
			<?php echo $html->link('Editar', array('controller'=> 'grupo_categorias', 'action'=>'edit', $subGrupo['id'])); ?>
			<?php echo $html->link('Excluir', array('controller'=> 'grupo_categorias', 'action'=>'delete', $subGrupo['id']), null, 'Você tem certeza que deseja excluir o sub-grupo #' . $subGrupo['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('Novo Sub Grupo', array('controller'=> 'grupo_categorias', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
<h3>Categorias Relacionadas</h3>
<?php if(!empty($grupoCategoria['Categoria'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Grupo Categoria</th>
		<th>Nome</th>
		<th>Tipo</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>A&ccedil;&otilde;es</th>
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
			<?php echo $html->link('Mostrar', array('controller'=> 'categorias', 'action'=>'view', $categoria['id'])); ?>
			<?php echo $html->link('Editar', array('controller'=> 'categorias', 'action'=>'edit', $categoria['id'])); ?>
			<?php echo $html->link('Excluir', array('controller'=> 'categorias', 'action'=>'delete', $categoria['id']), null, 'Você tem certeza que deseja excluir a categoria #' . $categoria['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('Nova Categoria', array('controller'=> 'categorias', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
