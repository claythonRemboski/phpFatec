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
define("_DB_HOST", "localhost");
define("_DB_USER", "userbanco");
define("_DB_PASS", "senhabanco");
define("_DB_NAME", "webdev");
include(SITE_ROOT . "/classes/postgres.php");
include(SITE_ROOT . "/functions/validate.php");
