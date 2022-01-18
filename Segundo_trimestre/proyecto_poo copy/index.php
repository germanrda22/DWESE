<?php
//controlador frontal

session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'controllers/ControladorFrontal.php';

$ControladorFrontal = new ControladorFrontal;
$ControladorFrontal->iniciar();

require_once 'views/layout/footer.php';