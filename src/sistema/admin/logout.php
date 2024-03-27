<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/sistema/config/config.php");
include_once(SITE_ROOT . "/admin/config/config.php");
validaSessao();
logout();
exit;
?>
