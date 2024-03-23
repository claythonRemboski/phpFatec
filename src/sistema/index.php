<?php include("./config/config.php"); ?>

<?php include(SITE_ROOT . "/layout/header.php"); ?>

<link rel="stylesheet" type="text/css" href="<?= SITE_URL; ?>/layout/buttons.css">

<div class="titulo">Acesso</div>

<div class="links">
    <a href="<?= SITE_URL; ?>/user" class="button">Perfil de Usuário</a>
    <a href="<?= SITE_URL; ?>/admin" class="button">Painel de Administração</a>
</div>

<?php include(SITE_ROOT . "/layout/footer.php"); ?>