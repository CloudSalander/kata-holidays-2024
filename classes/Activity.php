<?php 

abstract class Activity {
    
    //Todo: Be more accurated with date information. Maybe use promoted construct
    protected string $name;
    protected string $date;

    public function __construct(string $name, string $date) {
        $this->name = $name;
        $this->date = $date;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getName(): string {
        return $this->name;
    }
    

}