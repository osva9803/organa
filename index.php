<?php
require_once "./config/APP.php";
require_once "./controladores/vistasControlador.php";

$home = new vistasControlador();
$home->obtener_home_controlador();

/*$login = new vistasControlador();
$login->obtener_login_controlador();*/
/*
$plantilla = new vistasControlador();
$plantilla->obtener_plantilla_controlador();*/