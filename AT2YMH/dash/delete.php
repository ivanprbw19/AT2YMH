<?php

  include("config.php");
  $id_sepatu = $_GET["id_sepatu"];
  $result = mysqli_query($connect, "DELETE FROM sepatu WHERE id_sepatu=$id_sepatu");
  header("location:index.php");





?>