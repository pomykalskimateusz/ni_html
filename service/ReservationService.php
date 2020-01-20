<?php
include_once('model/Reservation.php');

class ReservationService {
    private $tableName = "reservations";

    function __construct() {}

    function fetchReservationsByUsername($username, $database) {
        $dateRow = "date";
        $timeRow = "time";

        $query = "SELECT r.date, r.time FROM $this->tableName r WHERE r.username = '$username'";

        $reservations = array();

        if($result = $database->getMysqli()->query($query)) {
            $rowAmount = $result->num_rows;
            $fieldsAmount = 2;

            while($row = $result->fetch_object())
            {
                $reservation =  new Reservation($row->$dateRow, $row->$timeRow);
                array_push($reservations, $reservation);
            }
        }
        return $reservations;
    }

    function createReservation($username, $date, $time, $database) {
        $query = "INSERT INTO $this->tableName VALUES('$username', '$date', '$time')";
        return $database->insert($query);
    }
}
?>