<?php

  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'config.php';

  // Query

  $sql = "

  SELECT *
  FROM node_tree

  ";


  $res = $conn -> query($sql);

  if ($res -> num_rows < 1) {

  echo json_encode(-2);
  return;
  }

  $confs = [];
  while($conf = $res -> fetch_assoc()) {
  $configurazioni[] = $conf;
  }

  echo json_encode($configurazioni);
