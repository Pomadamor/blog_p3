<?php

class Router
{

    protected $path;
    protected $paths = array (
    'article'           => array( 'controller' => 'Controller',            'method' => 'articleController'),
    'connexion'         => array( 'controller' => 'Controller',            'method' => 'connexionController'),
    'mentionLegale'     => array( 'controller' => 'Controller',            'method' => 'mentionController'),
    'inscription'       => array( 'controller' => 'Controller',            'method' => 'inscriptionController'),
    'commentConnect'    => array( 'controller' => 'Controller',            'method' => 'commentController'),
    'articleAdmin'      => array( 'controller' => 'Controller',            'method' => 'articleAdmin'),
    'commentAdmin'      => array( 'controller' => 'Controller',            'method' => 'commentAdmin'),
    'articleAdd'        => array( 'controller' => 'Controller',            'method' => 'articleAdd'),
    'modifierArticle'   => array( 'controller' => 'Controller',            'method' => 'modifierArticle'),
    'login'             => array( 'controller' => 'ControllerLogin',       'method' => 'getLogin'),
    'inscripValid'      => array( 'controller' => 'ControllerInscript',    'method' => 'getInscript'),
    'deconnexion'       => array( 'controller' => 'ControllerDeconnexion', 'method' => 'deconnexionController'),
    'signaler'          => array( 'controller' => 'ControllerSignaler',    'method' => 'signalEffect'),
    'articleModifier'   => array( 'controller' => 'ControllerArticle',     'method' => 'modifierArticle'),
    'supprimerArticle'  => array( 'controller' => 'ControllerArticle',     'method' => 'supprimerArticle'),
    'articleAddAdmin'   => array( 'controller' => 'ControllerArticle',     'method' => 'articleAddAdmin'),
    'accepterComment'   => array( 'controller' => 'ControllerComment',     'method' => 'accepterComment'),
    'supprimerComment'  => array( 'controller' => 'ControllerComment',     'method' => 'supprimerComment'),
    'commentAdd'        => array( 'controller' => 'ControllerComment',     'method' => 'commentAdd'),
  );

  public function __construct($path)
  {
      $this->path = $path;
  }

  public function getPathName()
  {
    $element = explode('/', $this->path);
    return $element['0'];
  }

  public function getParams()
  {
    $elements = explode('/', $this->path);
    unset($elements[0]);
    for($i = 1; $i < count($elements); $i++)
    {
      $params[$elements[$i]] = $elements[$i+1];
      $i++;
    }
    return $params;
  }

  public function renderController()
  {
    $pathname = $this->getPathName();
    $params = $this->getParams();
    if(array_key_exists($pathname, $this->paths))
    {
      $controller = $this->paths[$pathname]['controller'];
      $method = $this->paths[$pathname]['method'];

      $controller = new $controller();
      $controller->$method($params);
    }else{
      $controller = new Controller();
      $controller->errorController();
    }
    // if assets
    // erreur 404
  }
}
// else{
//   $controller->errorController();
// }
