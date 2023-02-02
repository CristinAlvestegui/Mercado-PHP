<?php
    require_once('Address.php');

    class Cliente extends Humano{
        protected int $quaCom;
        protected float $totalGas;

        public function __construct(string $nome, string $tele, string $nasci, string $cpf, Address $address, int $quaCom, float $totalGas){
            parent::__construct($nome, $tele, $nasci, $cpf, $address);
            $this->quaCom = $quaCom;
            $this->totalGas = $totalGas;
        }

        public function __get(string $qualQuer){
            return $this->$qualQuer;
        }

        public function __set(string $qualQuer, string $valor){
            $this->qualQuer = $valor;
        }

        public function __ToString(){
            return "<br>Quantidade de Compras:  ".$this->quaCom."<br>Total Gasto:  ".$this->totalGas;
        }

        public function media(){
            /* a cada 10 compras recebe uma média dos valores gastos para uma nova 
            compra no supermercado 
            quaCom deve ser um contador para cada nota fiscal, cada nota fiscal = 1ma compra.
            quando chegar a 10 fazer media do total de compras.*/
        }
    }//Fim da classe

?>