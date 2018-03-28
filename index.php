<?php
/**
 * Created by PhpStorm.
 * User: panagiotis
 * Date: 29/03/2018
 * Time: 02:11
 */
$name = isset($_GET['name']) ? $_GET['name'] : 'World';

header('Content-Type: text/html; charset=utf-8');

printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));