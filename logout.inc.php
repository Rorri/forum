<?php

if (isset($_POST['sumbit'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../Index.php");
	exit();
}
