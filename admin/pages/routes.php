<?php

$uri = explode("/", $_GET['page']);
$page = $uri[0];
$pageId = $uri[1] ?? null;

switch ($page) {
    case 'usuarios-novo':
        include_once 'users_create.php';
        break;

    case 'usuarios':
        include_once 'users_list.php';
        break;

    case 'postagens':
        include_once 'posts_list.php';
        break;

    default:
        include_once 'home.php';
        break;
}
