<?php
    namespace Mercado\PHP\Modelo;

    require_once('Address.php');

    class Humano{
        protected string $nome;
        protected string $tele;
        protected string $nasci;
        protected string $cpf;
        protected Address $address;

        public function __construct(string $nome, string $tele, string $nasci, string $cpf, Address $address){
            $this->nome       = $nome;
            $this->tele       = $tele;
            $this->nasci      = $nasci;
            $this->cpf        = $cpf;
            $this->address    = $address; 
        }

        public function __get(string $qualQuer) : string{
            return $this->$qualQuer;
        }

        public function __set(string $qualQuer, string $valor) :void{
            $this->qualQuer = $valor;
        }

        public function __ToString(){
            return "<br>Nome:  ".{$this->nome}."<br>Telefone:  ".{$this->tele}."<br>Aniversário:  ".{$this->nasci}."<br>CPF: ".{$this->cpf};
        }
    }//Fim da classe humanos

?>