<?php
$db = new mysqli('localhost','root','','webapp1');

//$db->query("SELECT * FROM users WHERE username = '$username'");

$username = $_POST['username'];
$password = $_POST['password'];

$db->query("SELECT * FROM users WHERE username = ?");
$statement->bind_param('s',$username);
$statement->execute();
$statement->store_result();

$rows = $statement->num_rows;
if($rows=0){
	die('you logged in wrong');
}
else
{
	$results = fetch_assoc_stmt($statement);
	$hash = md5($password);
	if ($hash == $results['password']){
		echo "success";
	}
	else {
		die('nope');
	}
}

?>