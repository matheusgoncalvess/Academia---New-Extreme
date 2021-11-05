<?php
define('HOST', 'fdb28.awardspace.net');
define('USUARIO', '3646830_login');
define('SENHA', 'Data1708');
define('DB', '3646830_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');