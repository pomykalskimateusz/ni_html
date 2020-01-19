<?php
    class RegistrationForm {
        static function content() {
            ?>
                 <h3>---</h3>
                 <form action="authentication.php" method="POST" name="form">
                     Imie: <br/><input type="text" name="firstname" /><br/>
                     Nazwisko: <br/><input type="text" name="surename" /><br/> 
                     Login: <br/><input type="text" name="username" /><br/>
                     Haslo: <br/><input type="text" name="password" /><br/>
                     <input type="submit" name="submit" value="Zarejestruj">     
                 </form>
            <?php
         } 
    }
?>