<?php

$c = new conectar();
$conexion =$c->conexion();

$nom = $_POST['nom'];
$apellido = $_POST['ape'];
$edad = $_POST['edad'];
$telefono = $_POST['tel'];
$localidad = $_POST['local'];