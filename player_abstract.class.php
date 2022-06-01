<?php

abstract class AbstractPlayer {

    private $nome;
    private $vida;
    private $forca;

    
    function __constructor($nome){
        $this->nome;
        $this->forca = 10;
        $this->vida = 100;
    }
     

    function __destruct()
    {
        
    }

    function ataque($inimigo,$potencia){
        if ($this->forca < $potencia) {
            return "Força insuficiente";
        } else {
            $inimigo->dano($potencia);
        }
    }


    function dano($potencia){
        $this->vida -=$potencia;
    }



    abstract function desenhar();

    





}


