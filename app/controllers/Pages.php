<?php

class Pages extends Controller {
  private $postModel;
  
  public function __construct() {
    // 
  }

  public function index() {
    $data = [
      'title' => 'Welcome'
    ];
    $this->view('pages/index', $data);
  }
}