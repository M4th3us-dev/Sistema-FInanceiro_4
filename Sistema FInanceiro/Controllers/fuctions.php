<?php
// functions.php
require 'config.php';

function loginUser($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        return $user['id'];
    }
    return false;
}

function addTransaction($user_id, $amount, $type, $category) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO transactions (user_id, amount, type, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("idss", $user_id, $amount, $type, $category);
    return $stmt->execute();
}

function getUserTransactions($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM transactions WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
?>
