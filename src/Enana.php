<?php

class Enana
{
    public $nombre; #Nombre de la enana
    public $puntosVida; #Valor de la vida que posee
    public $situacion; #La enana estará 'viva', 'muerta' o 'limbo', dependiendo de sus puntos de vida. >0 = viva;
                        #<0 = muerta; =0 = limbo

    public function __construct($a1,$a2,$a3)
    {
        $this->nombre=$a1;
        $this->puntosVida=$a2;
        $this->situacion=$a3;
    }

    public function heridaLeve(){
        $this->puntosVida -= 10;
        if($this->puntosVida <= 0){
            $this->situacion = "muerta";
        }
        else{
            $this->situacion = "viva";
        }
    }


    public function heridaGrave(){
        $this->puntosVida = 0;
        $this->situacion = "limbo";
    }

    public function pocima(){
        if($this->situacion != "limbo"){
            $this->puntosVida += 10;
            if($this->puntosVida <= 0){
                $this->situacion = "limbo";
            }
            else if($this->puntosVida < 0){
                $this->situacion = "muerta";
            }
            else{
                $this->situacion = "viva";
            }
        }
    }

    public function pocimaExtra(){
        if($this->situacion == "limbo"){
            $this->puntosVida = 50;
            $this->situacion = "viva";
        }
    }
}
