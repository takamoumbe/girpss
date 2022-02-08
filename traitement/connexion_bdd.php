
  <?php
  function connexion(){
    $db_server = "localhost";
    $db_login = "root";
    $db_pass = "";
    $db_name = "girpss";

    $conn = mysqli_connect($db_server,$db_login,$db_pass,$db_name);

    if(!$conn){
      return NULL;
    }else {
      return $conn;
    }
  }

 ?>