<?php

session_start();

echo 'ini adalah home';

if (isset($_SESSION['user'])) {
    $role = $_SESSION['user']['role'];

    echo "Selamat datang, " . $_SESSION['user']['name'] . "! Anda telah login sebagai " . $role . ".";
    echo '<br><a href="logout">Logout</a>';
    echo $_SESSION['user']['email'];

    // Tampilkan sesuai peran pengguna
    if ($role == 'admin') {
        echo '<h1>Admin Dashboard</h1>';
    } elseif ($role == 'mentor') {
        echo '<h2>Mentor Dashboard</h2>';
    } elseif ($role == 'student') {
        echo '<h3>Student Dashboard</h3>';
    }
} else {
    echo "Anda belum login.";
    echo '<br><a href="login">Login</a>';
} ?>
