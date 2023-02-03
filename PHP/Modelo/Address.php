<?php

    namespace Mercado\PHP\Modelo;

    class Address{
        protected string $logradouro;
        protected string $numero;
        protected string $comple;
        protected string $cep;
        protected string $bairro;
        protected string $cidade;
        protected string $UF;

        public function __construct(string $logradouro, string $numero, string $comple, string $cep, string $bairro, string $cidade, string $UF){
            $this->logradouro       = $logradouro;
            $this->numero           = $numero;
            $this->comple           = $comple;
            $this->cep              = $cep;
            $this->bairro           = $bairro;
            $this->cidade           = $cidade;
            $this->UF               = $UF;
        }//Fim do método construtor
    
        public function __get(string $qualVari) : string{
            return $this->$qualVari;
        }
    
        public function __set(string $qualVari, string $valor) : void{
            $this->qualVari = $valor;
        }

        public function __Tostring() : string{
            return "<br> Logradouro:  ".{$this->logradouro}."<br>Número:  ".{$this->numero}."<br>Complemento: ".{$this->comple}."<br>CEP:  ".{$this->cep}."<br>Bairro: ".{$this->bairro}."<br>Cidade:  ".{$this->cidade}."<br>Estado: ".{$this->UF};
        }
    }//Fima da classe Address
?>