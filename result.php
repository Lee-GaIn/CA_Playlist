<?php
  include 'get-params.php';
  $playlist = $_POST['selectedPlaylist'];

  if($playlist == "playlist1") {
    $cmd = "select name, singer from playlist1";
    $connection = new mysqli($_SESSION['endPoint'], $_SESSION['userName'], $_SESSION['pwd'], $_SESSION['dbName']);
    $res = $connection->query($cmd);

    while($row = $res->fetch_assoc()) {
      echo $row;
    }

  } else if ($playlist == "playlist2") {
    $cmd = "select name, singer from playlist2";
    $connection = new mysqli($_SESSION['endPoint'], $_SESSION['userName'], $_SESSION['pwd'], $_SESSION['dbName']);
    $res = $connection->query($cmd);

    while($row = $res->fetch_assoc()) {
      echo $row;
    }

  }
?>



