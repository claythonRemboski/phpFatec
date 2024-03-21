<?php
define("SITE_SUBFOLDER", "/webdev");
define(
    "SITE_ROOT",
    $_SERVER["DOCUMENT_ROOT"] . SITE_SUBFOLDER
);
define(
    "SITE_URL",
    "http://" . $_SERVER["SERVER_NAME"] . SITE_SUBFOLDER
);
define("host", "postgres");
define("user", "userbanco");
define("password", "senhabanco");
define("dbname", "webdev");
include(SITE_ROOT . "/classes/postgres.php");
include(SITE_ROOT . "/functions/validate.php");
