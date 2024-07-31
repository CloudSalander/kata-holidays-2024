<?php 

require_once 'Activity.php';

enum Type {
    case RESTAURANT;
	case SPORT;
    case CULTURE;
    case VISIT;
}

class Holiday extends Activity{

    private Type $type;
    const MSGS = ['Oh, I really enjoyed ', 'Seven hells! Will never return to ']; 

    public function __construct(string $name, string $date, Type $type) {
        parent::__construct($name,$date);
        $this->type = $type;
    }

    public function do():void {
        $msg_index = array_rand(Holiday::MSGS); 
        echo Holiday::MSGS[$msg_index].$this->name.PHP_EOL;
    }

    public function cancel():void {
       echo "We won't enjoy ".$this->name.PHP_EOL;
    }
}

?>