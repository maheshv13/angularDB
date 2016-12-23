<?php
	include 'database.php';
	$pdo = Database::connect();
	$sql = 'SELECT * FROM customers ORDER BY id DESC';
	foreach ($pdo->query($sql) as $row) {
		$data[] = $row;
	}
	Database::disconnect();
	echo json_encode($data);
	exit;
?>
