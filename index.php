<?php

class Movie{

    public $title;
    public $director;
    public $genre;
    public $length;
    public $year;
    public $country;
    
    public $selectedLanguage = 'english';


    function __construct($_title, $_director, $_genre, $_length, $_year, $_country,$_language='english'){

        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->year = $_year;
        $this->country = $_country;
        $this->getLanguage($_language);




    }

    public function getLanguage($language){

        $this->selectedLanguage = $language;
        return $this->selectLanguage();

    }

    private function selectLanguage(){
        return 'selected language : '. $this->selectedLanguage;
    }

    public function __set($name, $value) {
        throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
    }



}


$Troy = new Movie ('Troy', 'Wolfgang Petersen','action','162min','2004','USA','italiano');

$ToyStory = new Movie ('Toy Story','John Lasseter','computer-animated comedy','81min','1995','USA');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

   <div>
      <?= $Troy->title . $ToyStory->title . '</br>' . $Troy->getLanguage('french') 

      ?>

   </div>
    




    
</body>
</html>