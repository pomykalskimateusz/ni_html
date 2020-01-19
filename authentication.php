<!DOCTYPE html>
<html>
<head>
	<title>Restauracja</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="CSS/styles.css">
	<link rel="stylesheet" href="CSS/responsiveslides.css">
	<script src = "JS/scripts.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<script src="JS/responsiveslides.min.js"></script>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
</head>
<body>
    <h1>---</h1>
<div class="container-fluid">
	<?php
		include_once('components/NavigationBar.php');
        include_once('components/LoginForm.php');
        include_once('service/AuthenticationService.php');
        include_once('service/Database.php');
        include_once('components/RegistrationForm.php');

        NavigationBar::content(False);
        $database = new Database();
        $authenticationService = new AuthenticationService();
        $content = "";

        if (filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
            $akcja = filter_input(INPUT_POST, "submit");
            switch($akcja) {
                    case "Zaloguj": {
                      $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_MAGIC_QUOTES);
                      $password = hash("sha256", filter_input(INPUT_POST,"password", FILTER_SANITIZE_MAGIC_QUOTES));
                      $result = $authenticationService->authenticate($username, $password, $database);
                      if($result == null) {
                        $content = LoginForm::content();
                        $content = "Niepoprawne dane";
                      }
                      else {
                        header('Location: reservation.php');
                      }
                    } break;
                    case "Zarejestruj": {
                        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_MAGIC_QUOTES);
                        $password = hash("sha256", filter_input(INPUT_POST,"password", FILTER_SANITIZE_MAGIC_QUOTES));
                        $result = $authenticationService->createAccount($username, $password, $database);
                        if(result == True) {
                            $authenticationResult = $authenticationService->authenticate($username, $password, $database);
                            if(authenticationResult == null) {
                                $content = LoginForm::content();
                                $content = "Cos poszlo nie tak";
                            } else {
                                header('Location: reservation.php');
                            }
                        } else {
                            $content = RegistrationForm::content();
                            $content = "Nie udalo sie zarejestrowac";
                        }
                    } break;
                    case "Nowe konto": {
                      $content = RegistrationForm::content();
                    } break;
                    default:
            }
        } else {
            LoginForm::content();
        }
        echo $content;
	?>
	<footer style="background: white;">
		  <p>Wszystkie prawa zastrzeżone.</p>
	</footer>
</div>
</body>
</html>
