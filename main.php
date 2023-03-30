<?php

require_once "cinema.php";
require_once "filmes.php";
require_once "salas.php";
require_once "ingressos.php";
require_once "cliente.php";

$novocliente = new cliente ();
$novocliente->dados_cl();
$novocliente->filmes();
$novocliente->ingressos();
$novocliente->inf_salas();