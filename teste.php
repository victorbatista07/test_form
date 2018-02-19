<?php
ini_set("display_errors",1);
if (isset($_POST['cadastrar'])) {
	echo $_POST['nome'];
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['nascimento'];
	echo "<br>";
	echo $_POST['sexo'];
	echo "<br>";
	echo $_POST['estado'];
	echo "<br>";
	echo $_POST['senha'];
	echo "<br>";
	echo $_POST['termo'];
} else {
	echo 'Preencha com seu nome';
	echo "<br>";
	echo 'Preencha com seu email';
	echo "<br>";
	echo 'Preencha com sua data de nascimento';
	echo "<br>";
	echo 'Selecione seu sexo';
	echo "<br>";
	echo 'Selecione seu estado';
	echo "<br>";
	echo 'Preencha com sua senha';
	echo "<br>";
	echo 'Leia o termo e selecione o checkbox';
}
