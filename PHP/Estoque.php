<?php
    require_once('Produtos.php');
    //aqui também devemos chamar a classe Compras para confirmar?
    class Estoque{
        protected int $quanti;
        protected float $preco;
        protected Produtos $produ;

        public function __contruct(Produtos $produ, int $quanti, float $preco){
            $this->produ = $produ;
            $this->quanti = $quanti;
            $this->preco = $preco;
        }//Fim do construtor

        public function __get(string $qualQuer){
            return $this->$qualQuer;
        }

        public function __set(string $qualQuer, string $valor){
            $this->qualQuer = $valor;
        }

        public function __ToString(){
            return "<br>Quantidade:  ".$this->quanti."<br>Preço:  ".$this->preco;
        }

        public function control(){
            /*ok para fazer o controlole de estoque devesmos confirmar uma compra primerio.
            Uma vez a compra seja confirmada, podemos fazer um saque da quantidade de produtos.
            */
        }
    }//Fim da classe produtos
?>