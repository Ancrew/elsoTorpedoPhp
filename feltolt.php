<?php


include 'config.php';

$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);

    if (!$conn) {
      echo "hiba";
      echo mysqli_connect_error();
    }
    else{

        echo "Connected successfully";
//        $result = mysqli_query($conn, "SELECT az FROM felhasznalok ORDER BY az");
//        $ertek = mysqli_affected_rows($conn);
//    echo $ertek;
    }
    for ($i = 0; $i < 5; $i++){
        echo "<br>";
        $sql = <<<EOT
        INSERT INTO profil () VALUES ()
EOT;
     if (mysqli_query($conn, $sql)) {
    echo "ok";
  }
  else{
      echo "Nicht gut";
  }

//        $result = mysqli_query($conn, "INSERT INTO profil (osszjatek, gyozelem, vereseg) VALUES ('2', '1', '1')");  
        echo "lefutott";
    }



mysqli_close($conn);
// INSERT INTO profil (osszjatek, gyozelem, vereseg) VALUES ('2', '1', '1')        
