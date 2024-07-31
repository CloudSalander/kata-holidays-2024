<?php

require_once 'Activity.php';

enum Sprint {
    case PHP_HTML;
	case DATABASE;
    case PATTERNS;
    case LARAVEL_MVC;
    case LARAVEL_API;
}

class Homework extends Activity {
    private Sprint $sprint;
    private string $github_url;
    private string $comments;

    public function __construct(string $name, string $date, Sprint $sprint) {
        parent::__construct($name,$date);
        $this->type = $type;
    }
}


?>