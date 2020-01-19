<?php
include_once('model/AuthenticationData.php');

class AuthenticationService {
    private $authenticationTableName = "authentication";

    function __construct() {}

    function authenticate($username, $password, $database) {
        $query = "select * from $this->authenticationTableName where username='$username' and password='$password'";
        $authenticationData = null;

        if(($username!=="") && ($password!=="")) {
            if ($result = $database->getMysqli()->query($query)) {
                $count = $result->num_rows; 
                if ($count == 1) {
                    session_start();
                    $authenticationData = new AuthenticationData($username, $password);
                    $authenticationData->setIsLogged(true);
                    $_SESSION["authentication_data"] = serialize($authenticationData);
                }
                $result->close();
            }
        }

        return $authenticationData;
    }

    function createAccount($username, $password, $database) {
        $query = "INSERT INTO $this->authenticationTableName VALUES('$username', '$password')";
        return $database->insert($query);
    }

    
}
?>