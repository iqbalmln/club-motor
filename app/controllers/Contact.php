<?php

class Contact extends Controller {
  public function index() {
    $data['title'] = 'Contact Us';
    $this->view('templates/header', $data);
    $this->view('contact/index');
    $this->view('templates/footer');
  }

  public function tambah() {
    if($this->model('Message_model')->submitMessage($_POST) > 0) {
      header('Location: ' . BASEURL . 'contact');
      exit;
    }
  }
}