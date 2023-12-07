<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Panggil fungsi login
    if (login($username, $password)) {
        header("Location: /");
        exit();
    } else {
        echo "Login gagal. Cek kembali username dan password.";
    }
}

function login($username, $password) {
    $users = json_decode(file_get_contents('../userdb.json'), true);

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['user'] = $user;
            return true;
        }
    }

    return false;
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login">
        <label>Username: </label>
        <input type="text" name="username" required>
        <br>
        <label>Password: </label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
