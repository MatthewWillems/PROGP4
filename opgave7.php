<?php

class Bankrekening 
{
   public $banknummer ='nummer';
   public $saldo = 0;

   public function toevoegen($aantal){
    if ($aantal > 0) {
        $this->saldo += $aantal;
    }
    }

    public function weghalen($aantal){
        if ($aantal > 0 && $this->saldo >= $aantal) {
            $this->saldo -= $aantal;
        }
    }
   
   

}

$AddSaldo = new Bankrekening();
$AddSaldo->toevoegen(100);
$AddSaldo->weghalen(100);
echo $AddSaldo->saldo;
