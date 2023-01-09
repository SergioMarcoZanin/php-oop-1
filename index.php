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
