<?php
define("SITE_SUBFOLDER", "/sistema");
define("SITE_ROOT", $_SERVER["DOCUMENT_ROOT"] . SITE_SUBFOLDER);
define("SITE_URL", "http://" . $_SERVER["SERVER_NAME"] . SITE_SUBFOLDER);
define("host", "postgres");
define("user", "userbanco");
define("password", "senhabanco");
define("dbname", "sistema");
$perfil = "";
$css = SITE_URL . "/layout/sistema.css";
include(SITE_ROOT . "/class/postgres.php");
