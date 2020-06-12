<?php

header("Content-Type: application/json");
include_once 'config.php';

// La query

$sql = "

SELECT *
FROM node_tree_names
WHERE idNode = 2

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
