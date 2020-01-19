<?php
    class RegistrationForm {
        static function content() {
            ?>
            <h3>---</h3>
            <form class="text-center border border-light p-5" action="authentication.php" method="POST" name="form">
                <p class="h4 mb-4">Rejestracja</p>
                <input type="text" name="firstname" class="form-control mb-4" placeholder="Imie"/>
                <input type="text" name="surename" class="form-control mb-4" placeholder="Nazwisko"/> 
                <input type="text" name="username" class="form-control mb-4" placeholder="Nazwa uzytkownika"/>
                <input type="password" name="password" class="form-control mb-4" placeholder="Haslo"/>
                <input class="btn btn-block my-4" type="submit" name="submit" value="Zarejestruj">  
             </form>
            <?php
         } 
    }
?>