<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelp.php');
	$sql = 'delete from customer where id = '.$id;
	execute($sql);

	echo 'Delete Customer complete';
}