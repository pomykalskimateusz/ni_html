<?php
class ReservationPage {
    static function content() {
        ?>
            <h3>---</h3>
            <form action="authentication.php" method="POST" name="form">
                Data: </br>    
                <input type="date" class="form-control input-md" style="cursor: pointer;">
                Godzina: </br>
                <input type="time" class="form-control input-md" >
            <div class="form-group">
                <input type="submit" name="submit" value="Zarezerwuj stolik"> 
            </div>
            </form>
        <?php    
    }
}
?>