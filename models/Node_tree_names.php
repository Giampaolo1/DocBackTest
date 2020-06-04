<?php
  class node_tree_names {
    // DB stuff
    private $conn;
    private $table = 'node_tree_namess';

    // Post Properties
    public $idNode;
    public $node_tree_id;
    public $node_tree_level;
    public $node_tree_iLeft;
    public $node_tree_iRight;
    public $language;
    public $nodeName;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
  }
