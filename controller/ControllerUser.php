<?php

class ControllerUser{

  public function userActif(){
    $userRepo = new UserRepository();
    $user= $userRepo->getLoggedUser();
    return $user;
  }
}
