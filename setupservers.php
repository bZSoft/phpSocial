<?php
if (isset($_POST['submit'])) {
$host = $_POST['host'];
$username = $_POST['username'];
$password = $_Post['password'];
if (!empty($host) && !empty($username)) {
$con=mysql_connect($host,$username,$password);
$sql="CREATE DATABASE phpsocial":
if (mysql_query($con,$sql))
{
echo "Database created successfully";
$sql="CREATE TABLE users (
ln TEXT,
fn TEXT,
id INT AUTO_INCREMENT,
u VARCHAR(32),
p VARCHAR(32),
e TEXT,
pp TEXT,
bl TEXT,
fav TEXT,
isadmin VARCHAR(3),
PRIMARY KEY(id)
)";
if(mysql_query($con,$sql)){
echo "Table users created successfully";
$sql="CREATE TABLE settings (
bg TEXT,
l TEXT,
nfp VARCHAR(3),
cssm TEXT,
t TEXT
)";
if(mysql_query($con,$sql)){
echo "Table settings created successfully";
}
}
}
}
?>

<input placeholder="host" name="host">
<input placeholder="mysql username" name="username">
<input placeholder="mysql password" name="password">
<input type="submit" name="submit" value="submit">
