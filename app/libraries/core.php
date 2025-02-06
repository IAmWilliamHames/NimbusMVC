<?php

/*
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */ 
class Core {
  protected $currentController = 'BaseController';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct() {
    $url = $this->getUrl();

    // Look for and set controller 
    if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      $this->currentController = ucwords($url[0]);
      // Unset 0 index
      unset($url[0]);
    }

    // Require controller
    require_once('../app/controllers/' . $this->currentController . '.php');

    // Instantiate controller
    $this->currentController = new $this->currentController;

    // Check for method
    if (isset($url[1])) {
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        // unset 1 index
        unset($url[1]);
      }
    }

    // Get params
    $this->params = $url ? array_values($url) : [];

    // Call a callback with array of params
    call_user_func_array(
      [$this->currentController, $this->currentMethod], $this->params
    );
  }

  public function getUrl() {
    return explode(
      '/', filter_var(ltrim(rtrim($_SERVER['REQUEST_URI'], '/'), '/'), FILTER_SANITIZE_URL)
    );
  }
}