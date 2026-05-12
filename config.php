<?php
session_start();

$conn = new mysqli("localhost", "root", "", "cadastro_app");

if ($conn->connect_error) {
    die("Erro na conexão");
}