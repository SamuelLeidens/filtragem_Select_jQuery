<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar Noticias');
use \App\entity\Noticias;

$obNoticias = new Noticias;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {
    $obNoticias->titulo = $_POST['titulo'];
    $obNoticias->descricao = $_POST['descricao'];
    $obNoticias->status = $_POST['status'];
    $obNoticias->autor = $_POST['autor'];
    // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

    $obNoticias->cadastrar();

    header('location: index.php?status=success');
    exit;
}

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/formulario.php';
require __DIR__ . '/includes/footer.php';