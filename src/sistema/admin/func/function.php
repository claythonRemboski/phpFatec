<?php

function contaValida($username, $password)
{
	$dbObj = new Postgres();
	$sql = "SELECT * FROM conta WHERE usuario = :username AND senha = MD5(:password)";
	$params = array(':username' => $username, ':password' => $password);
	$result = $dbObj->query($sql, $params);
	if ($result) {
		if (!empty($result)) {
			return true;
		}
	}
	return false;
}


function registraConta($username)
{
	//session_start();
	//session_unset();
	$dbObj = new Postgres();
	$sql = "SELECT * FROM conta WHERE usuario = :username";
	$params = array(':username' => $username);
	$result = $dbObj->query($sql, $params);
	if ($result) {
		if ($row = $result[0]) {
			$_SESSION["CONTA_ID"] = $row["id"];
		}
	}
}

function logout()
{
	session_unset();
	session_destroy();
	header("Location: " . LOGIN_PATH);
	exit;
}
//var_dump($_SESSION['RETURN_URL']); Usei o vardump para verificar a url que estava sendo definida
function validaSessao()
{
	session_start();
	if (empty($_SESSION["CONTA_ID"])) {
		$_SESSION['RETURN_URL'] = $_SERVER['REQUEST_URI'];
		header("Location: " . LOGIN_PATH);
		exit;
	}
}
