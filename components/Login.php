<?php 
class Login {
    function __construct() {}

    function content() {
       ?>
            <form action="index.php" method="POST" name="form">
                Login: <br/><input type="text" name="id" /><br/>
                Haslo: <br/><input type="text" name="tytul" /><br/>
                <input type="submit" name="submit" value="Zaloguj">     
        	</form>
       <?php
    }
}