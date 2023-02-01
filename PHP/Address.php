<?php

    class Address{
        protected string $logradouro;
        protected string $numero;
        protected string $complemento;
        protected string $cep;
        protected string $bairro;
        protected string $cidade;
        protected string $estado;
        protected string $UF;

        public function __construct(string $logradouro, string $numero, string $comple, string $cep, string $bairro, string $cidade,string $UF){
            $this->logradouro       = $logradouro;
            $this->numero           = $numero;
            $this->comple           = $comple;
            $this->cep              = $cep;
            $this->bairro           = $bairro;
            $this->cidade           = $cidade;
            $this->uf               = $UF;
        }
    
        public function __get(string $qualVari){
            return $this->$qualVari;
        }
    
        public function __set(string $qualVari, string $valor){
            $this->qualVari = $valor;
        }

        public function __Tostring() : string{
            return "<br> Logradouro:  ".$this->logradouro."<br>Número:  ".$this->numero."<br>Complemento: ".$this->comple."<br>CEP:  ".$this->cep."<br>Bairro: ".$this->bairro."<br>Cidade:  ".$this->cidade."<br>Estado: ".$this->uf;
        }
    }//Fima da classe Address

    
    


?>