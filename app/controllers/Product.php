<?php

class Product extends Controller {

  public function index() {
    $data['title'] = "Product";
    $data['products'] = $this->model('Product_model')->getAllProduct();
    $this->view('templates/header', $data);
    $this->view('product/index', $data);
    $this->view('templates/footer');
  }

  public function tambah() {
    if($this->model('Product_model')->tambahDataProduct($_POST) > 0) {
      header('Location: ' . BASEURL . 'product');
      exit;
    }
  }
}