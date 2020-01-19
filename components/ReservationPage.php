<?php
class ReservationPage {
    static function content() {
        ?>
            <h3>---</h3>
            <form class="text-center border border-light p-5" action="authentication.php" method="POST">
                <p class="h4 mb-4">Rezerwacja stolika</p>
                <input type="date" name="date" class="form-control mb-4" placeholder="Data"/>
                <input type="time" name="time" class="form-control mb-4" placeholder="Godzina"/>
                <input class="btn btn-block my-4" type="submit" name="submit" value="Zarezerwuj stolik">
            </form>
        <?php    
    }
}
?>