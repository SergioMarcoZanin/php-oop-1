<?php

class Movie{
   
    public $nome;
    public $anno;
    public $top_rated = null;

    
    function __construct($_anno) {
        $this->anno = $_anno;
    }

   
    public function setVoto($voto){
        if ($voto > 4){
            $this->top_rated = true;
        } else {
            $this->top_rated = false;
        }
    }
    public function getVoto(){
        return $this->top_rated;
    }
}


$inception = new Movie(2010);
$inception->nome = "Red";
$inception->setVoto(5);
$inception->top_rated;


$blood_diamond = new Movie (2009);
$blood_diamond->nome = "Avatar";
$blood_diamond->setVoto(4);

var_dump($red);
var_dump($avatar);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-1</title>
</head>
<body>

    <div>
        <h1>Movies</h1>
    </div>
    
    <div>

        <div>
            <h2>
                <?php echo($red->nome)?>
            </h2>
            <h3>
                <?php echo($red->anno)?>
            <h3>
            <h4>
                <?php echo($red->top_rated)?>
            <h4>
        </div>

        <div>
            <h2>
                <?php echo($avatar->nome)?>
            </h2>
            <h3>
                <?php echo($avatar->anno)?>
            <h3>
            <h4>
                <?php echo($avatar->top_rated)?>
            <h4>
        </div>

    </div>
    
</body>
</html>
