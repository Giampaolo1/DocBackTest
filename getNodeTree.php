<?php

  // Headers
  header('Content-Type: application/json');

  include_once 'config.php';

  // Query

  $sql = "

  SELECT *
  FROM node_tree

  ";

  // scaricare i risultati

  $res = $conn -> query($sql);

  if ($res -> num_rows < 1) {
    echo json_encode(-2);
    return;
  }

  $confs = [];
  while($conf = $res -> fetch_assoc()) {
    $configurazioni[] = $conf;
  }

  // Chiudiamo la connessione
  $conn -> close();
  // codifichiamo
  echo json_encode($configurazioni);
