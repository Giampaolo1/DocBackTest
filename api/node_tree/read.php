<?php

  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Node_tree.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate Node_tree object
  $node_tree = new node_tree($db);

  // node tree query
  $result = $node_tree->read();
  // get row Count
  $num = $result->rowCount();
  // check if any nodetrees
  if ($num > 0) {
    // node tree array
    $node_trees_arr = array();
    $node_trees_arr["data"] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $node_tree_item = array(
        "idNode" => $id,
        "level" => $level,
        "iLeft" => $iLeft,
        "iRight" => $iRight,
      );
      // push
      array_push($node_trees_arr["data"], $node_tree_item);
    }

    // Turn to JSON e OUTPUT
    echo json_encode($node_trees_arr);

  } else {
    // no node trees
    echo json_encode(
      array("message" => "NO Node Trees Found")
    );
  }
