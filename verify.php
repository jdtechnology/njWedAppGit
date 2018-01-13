<?php

$password = "clangfarbenmelody";

if($_REQUEST["password"] == $password) {
	setcookie("developer", "true", time() + 3600);
	header('Location: index.php');
} else {
	header('Location: construction.php');
}