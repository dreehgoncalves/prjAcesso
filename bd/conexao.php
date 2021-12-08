<?php
$con = mysqli_connect('localhost', 'root', 'minas', 'bd_usuario');

if ($con == false) {
    die("Erro ao conectar com bd");
}
