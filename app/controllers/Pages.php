<?php

class Pages extends Controller {
  private $postModel;
  
  public function __construct() {
    $this->postModel = $this->model('Post');
  }

  public function index() {
    $posts = $this->postModel->getAllPosts();
    $this->view('pages/index', $posts);
  }
}