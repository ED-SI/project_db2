<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: main.php');
	exit();
}