<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password') {
    echo "Welcome, This is admin!";
} else {
    echo "Invalid username or password";
}
?>
