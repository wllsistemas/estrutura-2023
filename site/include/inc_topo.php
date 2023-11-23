<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<h2>TOPO</h2>
<a href="index.php?page=home" class="<?= ($page == 'home') ? 'active' : '' ?>">Home</a>
<a href="sobre.php?page=sobre" class="<?= ($page == 'sobre') ? 'active' : '' ?>">Sobre</a>
<a href="contato.php?page=contato" class="<?= ($page == 'contato') ? 'active' : '' ?>">Contato</a>
<hr>