<?php
class ReservationListPage {
    static function content($reservationList) {
        ?>
        <h1>---</h1>
        <ul class="list-group list-group-flush">
            <?php
                foreach ($reservationList as $reservation) {
                    ?>
                         <li class="list-group-item">
                            <?php
                                echo $reservation;
                            ?>
                        </li>
                    <?php
                }
            ?>
        </ul>    
        <?php
    }
}
?>