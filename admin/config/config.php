<?php
ini_set('display_errors', 1);
error_reporting(1);

header('Content-Type: charset=utf-8');
session_start();

define("TITLE", "Painel Administrativo v1");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_SCHEMA", "blog_phpiando");
define("DB_PORT", "3310");
?>