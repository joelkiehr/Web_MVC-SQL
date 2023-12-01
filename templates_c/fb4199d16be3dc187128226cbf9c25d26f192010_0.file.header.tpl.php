<?php
/* Smarty version 4.2.1, created on 2023-10-27 22:11:32
  from 'C:\xampp\htdocs\TPE-web2023\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653c1974200509_38180956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4199d16be3dc187128226cbf9c25d26f192010' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-web2023\\templates\\header.tpl',
      1 => 1697511655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653c1974200509_38180956 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
<base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Libros</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Lista de Libros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="autores">Autores</a>
          </li>
          <li class="nav-item ml-auto">
            <a class="nav-link" aria-current="page" href="libro">Libro</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" aria-current="page" href="librosPorautor">Libros Por Autores</a>
        </li>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login">Iniciar Sesion</a>
          </li>
        <?php } else { ?> 
          <li class="nav-item ml-auto">
            <a class="nav-link" aria-current="page" href="logout">Cerrar Sesion (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
          </li>
        <?php }?>
        </ul>
      </div>
    </div>
  </nav>
  </header>
    <main><?php }
}
