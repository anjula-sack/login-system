<?php
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header('Location: login.php?logged=false');
    exit();

}
$username = $_POST['username'];
$password = $_POST['password'];

if (!($username == "admin" && $password == "pass")) {
    header('Location: login.php?logged=false');
    exit();
}

echo "welcome ", $username . "<br/>";
echo "password ", $password . "<br/>";
echo '<a href="login.php">sign out</a>';
