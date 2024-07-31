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

    private function showHolidays(): string {
        echo "What plan you want to enjoy?(Please, tip the date of the plan or 0 to avoid) ;)".PHP_EOL;
        foreach($this->activities as $activity) {
            if(get_class($activity) === "Holiday") {
                echo $activity->getName()."(".$activity->getDate().")".PHP_EOL;
            }
        }
        return readline();
    }

    public function doHolidayPlan(): void {
        $date = $this->showHolidays();
        if(array_key_exists($date,$this->activities)) $this->activities[$date]->do(); 
        else echo "Hacker!! Get the f*ck out!".PHP_EOL;
    }
}