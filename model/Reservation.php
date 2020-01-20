<?php
class Reservation {
    private $date;
    private $time;
 
    function __construct($date, $time) {
       $this->date = $date;
       $this->time = $time;
    }

    public function getDate() { 
        return $this->date; 
    }

    public function getTime() { 
        return $this->time; 
    }
 }
?>