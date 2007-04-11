<div class="categoria">
<h2>Mostrando Categoria</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['id']?></dd>
		<dt>Grupo da Categoria</dt>
		<dd>&nbsp;<?php 
$i = 0;
foreach ($grupo_origem as $grupo) {
  $i++;
  echo $html->link($grupo['nome'], array('controller'=> 'grupo_categorias', 'action'=>'view', $grupo['id']));
  if ($i != sizeof($grupo_origem)) {
    echo " => ";
  }
}
?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['nome']; ?></dd>
		<dt>Tipo</dt>
		<dd>&nbsp;<?php echo $categoria['Categoria']['tipo']; ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Categoria',   array('action'=>'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Categoria', array('action'=>'delete', $categoria['Categoria']['id']), null, 'Você tem certeza que deseja excluir a categoria #' . $categoria['Categoria']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('Listar Categorias', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Nova Categoria',	array('action'=>'add')); ?> </li>
		<li><?php echo $html->link('Listar Grupo de Categoria', array('controller'=> 'grupo_categoria', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link('Nova Grupo de Categorias', array('controller'=> 'grupo_categoria', 'action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Lancamentos Relacionados</h3>
<?php if(!empty($categoria['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo</th>
		<th>Categoria</th>
		<th>Conta </th>
		<th>Descricao</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>Ações</th>
	</tr>
<?php foreach($categoria['Lancamento'] as $lancamento):?>
	<tr>
		<td><?php echo $lancamento['id'];?></td>
		<td><?php echo $lancamento['CentroCusto']['nome'];?></td>
		<td><?php echo $lancamento['Categoria']['nome'];?></td>
		<td><?php echo $lancamento['Conta']['nome'];?></td>
		<td><?php echo $lancamento['descricao'];?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['data']));?></td>
		<td><?php echo number_format($lancamento['valor'], 2, ',', '.');?></td>
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
