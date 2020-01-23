<?php
    class RegistrationForm {
        static function content() {
            ?>
            <h3>---</h3>
            <form class="text-center border border-light p-5" action="authentication.php" method="POST" name="form">
                <p class="h4 mb-4">Rejestracja</p>
                <input type="text" name="name" class="form-control mb-4" placeholder="Imie"/>
                <input type="text" name="surename" class="form-control mb-4" placeholder="Nazwisko"/> 
                <input type="text" name="username" class="form-control mb-4" placeholder="Nazwa uzytkownika"/>
                <input type="password" name="password" class="form-control mb-4" placeholder="Haslo"/>
                <input class="btn btn-block my-4" type="submit" name="submit" value="Zarejestruj">  
             </form>
            <?php
         }
         
         static function isValid() { 
            $args = [
                'name'      => ['filter' => FILTER_VALIDATE_REGEXP,
                                'options' => ['regexp' => '/^[A-Za-z]{1,30}$/']],
                'surename'  => ['filter' => FILTER_VALIDATE_REGEXP,
                                'options' => ['regexp' => '/^[A-Za-z]{1,30}$/']],
                'username'  => ['filter' => FILTER_VALIDATE_REGEXP,
                                'options' => ['regexp' => '/^[a-zA-Z0-9._]{1,30}$/']],
                'password'  => ['filter' => FILTER_VALIDATE_REGEXP,
                                'options' => ['regexp' => '/^[a-zA-Z0-9._]{6,30}$/']]
            ];
    
            $data = filter_input_array(INPUT_POST, $args);
   
           $errors = "";
            foreach ($data as $key => $val) {
                if ($val === false or $val === NULL) {
                    $errors .= $key . " ";
                }
            }
            if ($errors === "") {
                return True;
            } else {
                return False;
            }
         }
    }
?>