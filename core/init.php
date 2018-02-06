<?php 
  $usuario = "administrador";
  $passwd = "administrador123";
  try {
    $conn = new PDO("mysql:host=localhost;dbname=sitio;charset=utf8", $usuario, $passwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
  }
?>