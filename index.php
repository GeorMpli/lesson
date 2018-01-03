<?php
require_once("DB.php");
$db = new DB("127.0.0.1", "test", "root", "");
  if ($_SERVER['REQUEST_METHOD'] == "GET"){
    echo json_encode($db->query("SELECT * FROM users"));
    http_response_code(200);
  }else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "Hello Post!";
  }else{
    http_response_code(405);
  }
?>
