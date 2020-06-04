<?php
  class Node_tree {
    // DB Stuff
    private $conn;
    private $table = 'node_trees';

    // Node_tree Properties
    public $idNode;
    public $level;
    public $iLeft;
    public $iRight;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // GET Node_trees

    public function read() {
      // Create query
      $query = "SELECT
        c.idNode as node_tree_names_idNode,
        p.language
        FROM
        " . $this->table . " p
        LEFT JOIN
        node_tree_names c ON p.node_tree_names_idNode = c.idNode
        ORDER BY
        p.idNode DESC"

        // Prepare Statement
        $stmt = $this->conn->prepare($query);
        // Execute query
        $stmt->execute();

        return $stmt;
    }
  }
