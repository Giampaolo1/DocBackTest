<?php

  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'config.php';
  include_once 'node_tree.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog category object
  $node_tree = new node_tree($db);

  // Get IDnode
  $node_tree->idNode = isset($_GET['idNode']) ? $_GET['idNode'] : die();

  // Get node tree names
  $node_tree->read_single();

  // Create array
  $category_arr = array(
    'idNode' => $node_tree->idNode,
    'level' => $node_tree->level
  );

  // Make JSON
  print_r(json_encode($node_tree_arr));
