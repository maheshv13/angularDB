<?php
 include "database.php";
 $data=json_decode(file_get_contents("php://input"));
 $id=$cont->real_escape_string($data->id);
 $name=$cont->real_escape_string($data->name);
 
 $query = "INSERT INTO customers VALUES($id, '"$name"')"
?>