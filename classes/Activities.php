<?php

class Activities {
    private array $activities;
    const ANTIHACKER_MSG = "Hacker!! Get the f*ck out!".PHP_EOL;

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
        echo "Choose your plan!(tip the date) ".PHP_EOL;
        foreach($this->activities as $activity) {
            if(get_class($activity) === "Holiday") {
                echo $activity->getName()."(".$activity->getDate().")".PHP_EOL;
            }
        }
        return readline();
    }

    private function showHomework(): string {
        echo "Choose your homework to deliver or redeliver!(tip the date) ".PHP_EOL;
        foreach($this->activities as $activity) {
            if(get_class($activity) === "Homework") {
                echo $activity->getName()."(".$activity->getDate().")".PHP_EOL;
            }
        }
        return readline();
    }

    public function doHolidayPlan(): void {
        $date = $this->showHolidays();
        if(array_key_exists($date,$this->activities)) $this->activities[$date]->do(); 
        else echo Activities::ANTIHACKER_MSG;
    }

    public function cancelHolidayPlan(): void {
        $date = $this->showHolidays();
        if(array_key_exists($date,$this->activities)) {
            $this->activities[$date]->cancel();
            unset($this->activities[$date]);
        } 
        else echo Activities::ANTIHACKER_MSG; 
    }

    public function deliverHomework(string $github_url, string $comments) {
        $date = $this->showHomework();
        if(array_key_exists($date,$this->activities)) $this->activities[$date]->deliver($github_url,$comments); 
        else echo Activities::ANTIHACKER_MSG;
    }
}