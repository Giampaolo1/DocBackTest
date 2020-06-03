<?php
  class node_tree {
    // DB Stuff
    private $conn;
    private $table = 'node_trees';

    // Properties
    public $idNode;
    public $level;
    public $iLeft;
    public $iRight;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
  }
