<?php
class AuthenticationData {
   private $username;
   private $password;
   private $isLogged = false;

   function __construct($username, $password) {
      $this->username = $username; 
      $this->password = $password;
   }

   function setIsLogged($value) {
      $this->isLogged = $value;
   }
}
?>