<?php

class Message_model {
  private $table = 'message';
  private $db;
  
  public function __construct() {
    $this->db = new Database;
  }

  public function submitMessage($data) {
    $query = "INSERT INTO message VALUES (null, :name, :email, :phone, :message)";

    $this->db->query($query);
    $this->db->bind('name', $data['name']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('phone', $data['phone']);
    $this->db->bind('message', $data['message']);

    $this->db->execute(); 

    return $this->db->rowCount();
  }
}