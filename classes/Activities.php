<?php

class Activities {
    private array $activities;

    public function __construct() {
        $this->activities = [];
    }

    public function addActivity(Activity $activity): void {
        $date = $activity->getDate();
        if(!array_key_exists($date,$this->activities)) {
            $this->activities[$date] = $activity; 
            echo $activity->getName()." was added your schedule!";
        }
        else echo "Sorry, you have plans for ".$date;
        echo PHP_EOL;
    }
}