<?php

class About extends Controller {
  
  public function index($title = "About Us") {
    $data['title'] = $title;
    $data['name'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page($name = "Iqbal", $age = 21, $job = "developer", $title = "About Me") {
    $data['name'] = $name;
    $data['age'] = $age;
    $data['job'] = $job;
    $data['title'] = $title;
    $this->view('templates/header', $data);
    $this->view('about/page', $data);
    $this->view('templates/footer');
  }
}