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
  <link rel="stylesheet" href="CSS/zamowienie.css">
  <link rel="stylesheet" href="CSS/responsiveslides.css">
  <script src="JS/scripts.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <script src="JS/responsiveslides.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <h1>---</h1>
    <?php
      include_once('components/NavigationBar.php');
      include_once('components/ReservationPage.php');
      include_once('service/Database.php');
      include_once('service/ReservationService.php');
      include_once('model/User.php');
     
      session_start();
      if(isset($_SESSION["authenticated_user"])) {
        if (filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
          $akcja = filter_input(INPUT_POST, "submit");
          
          switch($akcja) {
            case "Zarezerwuj stolik": {
              $user = unserialize($_SESSION['authenticated_user']);
              $date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_MAGIC_QUOTES);
              $time = filter_input(INPUT_POST, "time", FILTER_SANITIZE_MAGIC_QUOTES);

              $database = new Database();
              $reservationService = new ReservationService(); 
              $result = $reservationService->createReservation($user->getUsername(), $date, $time, $database);
              if($result == True) {
                header('Location: reservationList.php');
              } else {
                NavigationBar::content(True);
                $content = ReservationPage::content();
                $content = "Nie udalo sie zarezerwowac";
              }
            } break;
            default:
            }
        } else {
          NavigationBar::content(True);
          $content = ReservationPage::content();
        }
      } else {
        header('Location: authentication.php');
      }
    ?>
    <footer style="background: white;">
		  <p>Wszystkie prawa zastrzeżone.</p>
	  </footer>
    <script src="JS/zamowienie.js"></script>
  </div>
</body>

</html>
