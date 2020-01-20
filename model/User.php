<?php
class User {
   private $name;
   private $surename;
   private $username;
   private $password;
   private $isLogged = false;

   function __construct($name, $surename, $username, $password) {
      $this->name = $name;
      $this->surename = $surename;
      $this->username = $username; 
      $this->password = $password;
   }

   public function getUsername() { 
      return $this->username; 
   }

   function setIsLogged($value) {
      $this->isLogged = $value;
   }
}
?>