<?php

if(!$_SESSION['nome']) {
	header('Location: inicio.php');
	exit();
}