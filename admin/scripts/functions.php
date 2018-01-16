<?php

  require('connect.php');
  //create query
  $query = 'SELECT * FROM tbl_works';
  //get result
  $result = mysqli_query($link, $query);

  //Fetch data
  $works = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //Free result
  echo json_encode($works);
