<?php
class ReservationService {
    private $tableName = "reservations";

    function __construct() {}

    function fetchReservationsByUsername($username, $database) {
        $query = "SELECT r.date, r.time FROM $this->tableName r WHERE r.username = '$username'";

        return $database->select($query, array("date", "time"));
    }

    function createReservation($username, $date, $time, $database) {
        $query = "INSERT INTO $this->tableName VALUES('$username', '$date', '$time')";
        return $database->insert($query);
    }
}
?>