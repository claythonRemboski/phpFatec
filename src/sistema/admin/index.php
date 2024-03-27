<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/sistema/config/config.php");
include_once(SITE_ROOT . "/admin/config/config.php");

validaSessao();

include(SITE_ROOT . "/layout/header.php");

echo "<h2>ADMINISTRADOR</h2>";

include(SITE_ROOT . "/admin/menu.php");
?>

<?php
include(SITE_ROOT . "/layout/footer.php");
?>