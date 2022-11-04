<?php

$conectare = mysqli_connect('localhost', 'root', '', 'raportaressc');

if (!$conectare) {
	die('Conectarea la baza de date nu a reușit!');
}
