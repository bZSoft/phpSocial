<?php include 'main.i.php'; 
if (isset($_POST['snu'])) {
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$u = $_POST['u'];
	$p = $_POST['p'];
	$bl = $_POST['bl'];
	$fav = $_POST['fav'];
	if (!empty($fn) && !empty($ln) && !empty($u) && !empty($p) && !empty($bl) && !empty($fav)) {
		$sql = mysql_query("SELECT * FROM users WHERE u='$u'");
		if (mysql_num_rows($sql) > 0) {
			echo "That username is already in use!";
		}
	} else {
		echo "One of the feilds wasn't filled in!";
	}
}
?>
<form action="#" method="post">
	<input name="fn" placeholder="First name"><br><br>
	<input name="ln" placeholder="Last name"><br><br>
	<input name="u" placeholder="Username"><br><br>
	<input name="p" placeholder="Password"><br><br>
	<input name="bl" placeholder="Blurb"><br><br>
	<input name="fav" placeholder="Favorite things"><br><br>
	<input value="Sign up" name="snu" type="submit"><br>
</form>
</div>
</body>
</html>