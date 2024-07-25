<?php 

require 'Activity.php';

enum Type {
    case RESTAURANT;
	case SPORT;
    case CULTURE;
    case VISIT;
}

class Holiday extends Activity{

    private Type $type;

    public function __construct(string $name, string $date, Type $type) {
        parent::__construct($name,$date);
        $this->type = $type;
    }

    public function do();
    public function cancel();


}

?>