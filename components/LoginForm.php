<?php 
class LoginForm {
    static function content() {
       ?>
            <h3>---</h3>
            <form action="authentication.php" method="POST" name="form">
                Login: <br/><input type="text" name="username" /><br/>
                Haslo: <br/><input type="text" name="password" /><br/>
                <input type="submit" name="submit" value="Zaloguj">     
                <input type="submit" name="submit" value="Nowe konto">
        	</form>
       <?php
    }
}