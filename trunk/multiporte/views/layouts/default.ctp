<?php echo $html->docType('xhtml-trans'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Multiporte</title>
  <?php
    echo $html->charset('utf-8');
    echo "\n";
    echo $html->meta(null, '/favicon.ico', array('type' => 'icon', 'rel' => 'icon'));
    echo "\n";
    echo $html->meta(null, '/favicon.ico', array('type' => 'icon', 'rel' => 'shortcut'));
    echo "\n";
    echo $html->css('cake.generic', 'stylesheet');
    echo "\n";
  ?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link('Multiporte - ERP', '/'); ?></h1>
		</div>
		<div id="content">
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<a href="http://www.cakephp.org/" target="_new"><?php echo $html->image('cake.power.png', array('alt' => 'CakePHP: the PHP Rapid Development Framework', 'border' => '0')); ?></a>
		</div>
	</div>
	</body>
</html>