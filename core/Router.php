<?php
class Router
{
  private $routes = [];
  private $projectName = '/gamedot';

  public function builduri($uri)
  {
    return $this->projectName . $uri;
  }

  public function add($method, $uri, $controller)
  {
    $this->routes[] = [
      'uri' => $this->builduri($uri),
      'controller' => $controller,
      'method' => $method,
    ];
  }

  public function get($uri, $controller)
  {
    $this->add('GET', $uri, $controller);
  }

  public function post($uri, $controller)
  {
    $this->add('POST', $uri, $controller);
  }

  public function delete($uri, $controller)
  {
    $this->add('DELETE', $uri, $controller);
  }

  public function put($uri, $controller)
  {
    $this->add('PUT', $uri, $controller);
  }

  private function setRouteParams($matches)
  {
    foreach ($matches as $key => $value) {
      if (!is_numeric($key)) {
        $_GET[$key] = $value;
      }
    }
  }

  public function route($uri, $method = 'GET')
  {

    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === $method) {
        require($route['controller']);
        return;
      }
    }
    abort("404 Not Found");
  }
}
