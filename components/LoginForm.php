<?php 
class LoginForm {
    static function content() {
       ?>
        <h3>---</h3>        
        <form class="text-center border border-light p-5" action="authentication.php" method="POST">
            <p class="h4 mb-4">Logowanie</p>
            <input type="text" name="username" class="form-control mb-4" placeholder="Nazwa uzytkownika">
            <input type="password" name="password" class="form-control mb-4" placeholder="Haslo">
            <input class="btn btn-block my-4" type="submit" name="submit" value="Zaloguj">     
            <input class="btn btn-block my-4" type="submit" name="submit" value="Nowe konto">
        </form>
       <?php
    }
}