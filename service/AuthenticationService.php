<?php
include_once('model/User.php');

class AuthenticationService {
    private $tableName = "users";

    function __construct() {}

    function authenticate($username, $password, $database) {
        $query = "select * from $this->tableName where username='$username' and password='$password'";
        $user = null;

        if(($username!=="") && ($password!=="")) {
            if ($result = $database->getMysqli()->query($query)) {
                $count = $result->num_rows; 
                if ($count == 1) {
                    session_start();
                    $user = new User($username, $username, $username, $password);
                    $user->setIsLogged(true);
                    $_SESSION["authenticated_user"] = serialize($user);
                }
                $result->close();
            }
        }

        return $user;
    }

    function createAccount($name, $surename, $username, $password, $database) {
        $query = "INSERT INTO $this->tableName VALUES('$name', '$surename', '$username', '$password')";
        return $database->insert($query);
    }

    
}
?>