<?php

  require('connect.php');
  //create query
  $query = 'SELECT * FROM tbl_lightbox WHERE lightbox_img LIKE "lotr%.png"';
  //get result
  $result = mysqli_query($link, $query);

  //Fetch data
  $lotrLarge = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //Free result
  echo json_encode($lotrLarge);
