<?php
require_once 'firebaseLib.php';
// --- Aqui se asigna la URL de la base de datos en Firebase
$url = 'https://mothman-570f0-default-rtdb.firebaseio.com';
// --- Consume el Token de la base de datos en la siguiente linea
$token = 'Q8lZmPx7EnKymUoFkHnZjMD2SzF9ofyz0lf4NqeH';
// --- Desde aquí obtiene el parametro que se enviará por http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Aquí asigna la parte de la estrucutra de la base de datos donde irá el parámetro
$firebasePath = '/temperatura';
/// --- Generar llamadas
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);