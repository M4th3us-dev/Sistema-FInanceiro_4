<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Redireciona para o dashboard, pois `index.php` apenas verifica o login.
header("Location: dashboard.php");
?>
