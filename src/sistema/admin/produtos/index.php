<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/sistema/config/config.php");
include_once(SITE_ROOT . "/admin/config/config.php");

validaSessao();

include(SITE_ROOT."/layout/header.php");

include(SITE_ROOT."/admin/menu.php");

?>

<h2>PRODUTOS</h2>

<?php

include(SITE_ROOT."/layout/footer.php");

?>
