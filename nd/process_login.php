<?php

$inserita = $_POST['password'];
$corretta = '2206';

if ($inserita === $corretta) {
  session_start();
  $_SESSION['logged_in'] = true;
  header('Location: pagina_riservata.php');
} else {
  header('Location: index.html?errore=1');
}
?>
