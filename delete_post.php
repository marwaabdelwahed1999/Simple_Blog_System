<?php
require 'config/config.php';
require 'crud.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$id = $_GET['id'];

deletePost($id);

header('Location: index.php');
?>
