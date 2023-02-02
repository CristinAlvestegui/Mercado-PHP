<?php
    require_once('Address.php');
    class Funcionario extends Humano{
        protected int $codigo;
        protected string $sexo;
        protected string $funcao;
        protected float $salar;

        public function __contruct(string $nome, string $tele, string $nasci, string $cpf, Address $address, int $codigo, string $sexo, string $funcao, float $salar){
            parent::__construct($nome,  $tele,  $nasci,  $cpf, $address);
            $this->codigo = $codigo;
            $this->sexo   = $sexo;
            $this->funcao = $funcao;
            $this->salar  = $salar;
        }

        public function __get(string $qualQuer){
            return $this->$qualQuer;
        }

        public function __set(string $qualQuer, string $valor){
            $this->qualQuer = $valor;
        }

        public function __ToString(){
            return "<br>Código:  ".$this->codigo."<br>Sexo:  ".$this->sexo."<br>Função:  ".$this->funcao."<br>Salário: ".$this->salar."R$";
        }

        /*Somente gerentes podem cadastrar funcionarios
        */
    }//Fim da classe funcionario
?>