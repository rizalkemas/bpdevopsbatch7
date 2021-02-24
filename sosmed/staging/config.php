      <?php
      $db_host = "DB_HOST";
      $db_user = "DB_USER";
      $db_pass = "DB_PASS";
      $db_name = "dbsosmed";

      try {
      //create PDO connection
      $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
      } catch(PDOException $e) {
      //show error
      die("Terjadi masalah: " . $e->getMessage());
      }
