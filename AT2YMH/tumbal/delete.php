<?php

  include("config.php");
  $id_mhs = $_GET["id_mhs"];
  $result = mysqli_query($connect, "DELETE FROM tmhs WHERE id_mhs=$id_mhs");
  header("location:index.php");





?>