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
        $this->sprint = $sprint;
        $this->github_url = "";
        $this->comments = "";
    }

    public function deliver(string $github_url, string $comments): void {
        echo "Thank you for delivering ".$this->name.PHP_EOL;
    }

    public function reDeliver(string $github_url, string $comments): void {
    
        echo  "Oh,thanks, now sure that".$this->name." its better ".PHP_EOL;
    }

    private function setHomeworkData(string $github_url, string $comments): void {
        $this->github_url = $github_url;
        $this->comments = $comments;
    }

    public function getGithubUrl(): string {
        return $this->github_url;
    }
}


?>