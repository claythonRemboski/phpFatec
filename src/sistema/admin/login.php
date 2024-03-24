<?php

include("../config/config.php");
include(SITE_ROOT . "/admin/config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (contaValida($_POST["username"], $_POST["password"])) {
		registraConta($_POST["username"]);
		header("Location: ./index.php");
		exit;
	}
	$username = $_POST["username"];
	$mensagem = "Usuario ou Senha incorreto(s)!";
}


include(SITE_ROOT . "/layout/header.php");

?>
<link rel="stylesheet" type="text/css" href="<?= SITE_URL; ?>/layout/login.css">

<form name="formLogin" method="POST" class="login-form">
	<div class="form-group">
		<?= isset($mensagem) ? $mensagem : ""; ?>
	</div>
	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" value="<?= isset($username) ? $username : ""; ?>">
	</div>
	<div class="form-group">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" value="<?= isset($password) ? $password : ""; ?>">
	</div>
	<div class="form-group">
		<button type="submit" name="submit">Submit</button>
	</div>
</form>
<script language="JavaScript" type="text/javascript">
	<!--
	if (document.formLogin.username.value) {
		document.formLogin.password.focus();
	} else {
		document.formLogin.username.focus();
	}
	//
	-->
</script>


<?php

include(SITE_ROOT . "/layout/footer.php");

?>