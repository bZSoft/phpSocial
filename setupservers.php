<?php
if (isset($_POST['submit'])) {
$host = $_POST['host'];
$username = $_POST['username'];
$password = $_Post['password'];
if (!empty($host) && !empty($username)) {
mysql_connect($host,$username,$password);
}
}
?>

<input placeholder="host" name="host">
<input placeholder="mysql username" name="username">
<input placeholder="mysql password" name="password">
<input type="submit" name="submit" value="submit">
