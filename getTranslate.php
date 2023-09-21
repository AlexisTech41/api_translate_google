<?php

require_once('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$response = array(); // Preparar un array para la respuesta

if (isset($_POST['textotraducir'], $_POST['idiomaOrigen'], $_POST['idiomaDestino'])) {
    $source = $_POST['idiomaOrigen'];
    $target = $_POST['idiomaDestino'];
    $text = $_POST['textotraducir'];

    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);

    if ($result !== false) {
        $response['success'] = true;
        $response['textotraducido'] = $result;
    } else {
        $response['success'] = false;
        $response['message'] = 'Error en la traducción.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'No se proporcionó texto para traducir o idiomas.';
}

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
