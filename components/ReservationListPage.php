<?php
include_once('model/Reservation.php');

class ReservationListPage {
    static function content($reservationList) {
        ?>
        <h3>---</h3>
        <ul class="list-group list-group-flush">
        <p class="h4 mb-4">Moje rezerwacje</p>
            <?php
                foreach ($reservationList as $reservation) {
                    ?>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php
                                    echo $reservation->getDate();
                                ?>
                                <span class="badge badge-primary badge-pill">
                                <?php
                                    echo $reservation->getTime();
                                ?>
                                </span>
                        </li>
                    <?php
                }
            ?>
        </ul>    
        <?php
    }
}
?>