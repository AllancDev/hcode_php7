<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello</h1>
<p>Teste do rain TPL. <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>