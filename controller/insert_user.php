<?php

include '../model/Conexao.class.php';
include '../model/Manager.class.php';

$manager = new Manager();

if (!empty($_POST)) {
    $manager->insert_user($_POST);
    
    header("Location: ../index.php?cod=1");
}