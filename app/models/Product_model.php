<?php

class Product_model {
  private $table = 'product';
  private $db;
  
  public function __construct() {
    $this->db = new Database;
  }

  public function getAllProduct() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function tambahDataProduct($data) {
    $query = "INSERT INTO product VALUES (null, :image, :description, :price)";

    $this->db->query($query);
    $this->db->bind('image', $data['image']);
    $this->db->bind('description', $data['description']);
    $this->db->bind('price', $data['price']);

    $this->db->execute(); 

    return $this->db->rowCount();
  }
}