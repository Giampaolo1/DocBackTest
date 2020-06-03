<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once 'config.php';
  include_once 'node_tree_names.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $node_tree_names = new node_tree_names($db);

  // Get ID
  $node_tree_names->idNode = isset($_GET['idNode']) ? $_GET['idNode'] : die();

  // Get node_tree_names
  $node_tree_names->read_single();

  // Create array
  $node_tree_names_arr = array(
    'idNode' => $node_tree_names->idNode,
    'language' => $node_tree_names->language,
    'nodeName' => $node_tree_names->nodeName
  );

  // Make JSON
  print_r(json_encode($node_tree_names_arr));
