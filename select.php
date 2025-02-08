<?php
session_start();

$lang   =   $_GET['lang'];

$_SESSION['site_lang']  =   $lang;
header('Location: index.php');


