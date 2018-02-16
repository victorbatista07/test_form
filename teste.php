<?php

if ($_POST['enviar']) {
	$nome = $_POST['nome'];
} else {
	$nome = 'preencha';
}
include('seila.php');
