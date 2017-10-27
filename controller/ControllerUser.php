<?php

class ControllerUser{

  public static function userActif(){
    $userRepo = new UserRepository();
    $user= $userRepo->getLoggedUser();
  }
}
