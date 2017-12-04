<?php

class View
{

    protected $template;
    protected $params;
    protected $user;

    public function __construct($template)
    {
      $this->template = $template;
      $userRepo    = new UserRepository();
      $this->user  = $userRepo->getLoggedUser();
    }

    public function renderTemplate()
    {
      foreach ($this->params as $name => $value)
      {
          ${$name} = $value;
      };
      ob_start();
      if( ($this->user !== false) && ($this->user->getAdmin() == True) && ( file_exists(VIEW.$this->template.'Admin.php') == true ) ){
        include_once (VIEW.$this->template.'Admin.php');
      }elseif( ($this->user !== false) && ( file_exists(VIEW.$this->template.'Connecte.php') == true ) ){
        include_once (VIEW.$this->template.'Connecte.php');
      }else{
        include_once (VIEW.$this->template.'.php');
      }
      $html = ob_get_clean();
      return $html;
    }

    public function render($params = array())
    {
      $this->params = $params;
      $content = $this->renderTemplate();
      if($this->user === false){
        include_once(VIEW.'_gabarit.php');
      }elseif($this->user->getAdmin() == True){
        include_once(VIEW.'_gabaritAdmin.php');
      }else{
        include_once(VIEW.'_gabaritConnecte.php');
      }
    }

}
