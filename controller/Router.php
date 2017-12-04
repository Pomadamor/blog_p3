<?php

class Router
{

    protected $path;
    protected $params;

    protected $paths = array (
      'articleAdd'        => array( 'controller' => 'Controller',            'method' => 'articleAdd'),
      'article'           => array( 'controller' => 'Controller',            'method' => 'articleController'),
      'connexion'         => array( 'controller' => 'Controller',            'method' => 'connexionController'),
      'mentionLegale'     => array( 'controller' => 'Controller',            'method' => 'mentionController'),
      'inscription'       => array( 'controller' => 'Controller',            'method' => 'inscriptionController'),
      'commentConnect'    => array( 'controller' => 'Controller',            'method' => 'commentController'),
      'articleAdmin'      => array( 'controller' => 'Controller',            'method' => 'articleAdmin'),
      'commentAdmin'      => array( 'controller' => 'Controller',            'method' => 'commentAdmin'),
      'modifierArticle'   => array( 'controller' => 'Controller',            'method' => 'modifierArticle'),
      'articleAddAdmin'   => array( 'controller' => 'ControllerArticle',     'method' => 'articleAddAdmin'),
      'articleModifier'   => array( 'controller' => 'ControllerArticle',     'method' => 'modifierArticle'),
      'supprimerArticle'  => array( 'controller' => 'ControllerArticle',     'method' => 'supprimerArticle'),
      'login'             => array( 'controller' => 'ControllerLogin',       'method' => 'getLogin'),
      'inscripValid'      => array( 'controller' => 'ControllerInscript',    'method' => 'getInscript'),
      'deconnexion'       => array( 'controller' => 'ControllerDeconnexion', 'method' => 'deconnexionController'),
      'signaler'          => array( 'controller' => 'ControllerSignaler',    'method' => 'signalEffect'),
      'accepterComment'   => array( 'controller' => 'ControllerComment',     'method' => 'accepterComment'),
      'supprimerComment'  => array( 'controller' => 'ControllerComment',     'method' => 'supprimerComment'),
      'commentAdd'        => array( 'controller' => 'ControllerComment',     'method' => 'commentAdd'),
    );

  public function __construct($path, $params)
  {
      $this->path   = $path;
      $this->params = $params;
  }

  public function renderController()
  {
    $pathname = $this->path;
    $params   = $this->params;
    if(array_key_exists($pathname, $this->paths))
    {
      $controller = $this->paths[$pathname]['controller'];
      $method     = $this->paths[$pathname]['method'];

      $controller = new $controller();
      $controller->$method($params);
    }else{
      $controller = new Controller();
      $controller->homeController();
    }
  }
}
