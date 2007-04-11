<h2>Opções</h2>
<div align="center">
  <?php 
    echo $html->link('Categorias', array('controller'=> 'categorias', 'action'=>'index'));
    echo "\n<br /><br />\n"; 
    echo $html->link('Centros de Custo', array('controller'=> 'centro_custos', 'action'=>'index')); 
    echo "\n<br /><br />\n"; 
    echo $html->link('Contas', array('controller'=> 'contas', 'action'=>'index')); 
    echo "\n<br /><br />\n"; 
    echo $html->link('Grupo de Categorias', array('controller'=> 'grupo_categorias', 'action'=>'index')); 
    echo "\n<br /><br />\n"; 
    echo $html->link('Lançamentos', array('controller'=> 'lancamentos', 'action'=>'index')); 
    echo "\n<br /><br />\n"; 
  ?>
</div>
