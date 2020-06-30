<?php
    class Produto {
        //Atributos (características)
        private $codigo;
        private $nome;
        private $preco;
        
        //Métodos especiais (getters // setters)
        public function getCodigo(){
            return $this->codigo;    
        }
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }

        //Método para imprimir dados na tela
        public function imprimir(){
            echo "<h2>Dados do Produto: $this->nome </h2>";
            echo "Codigo: $this->codigo <br />";
            echo "Preço do Produto: $this->preco <br />";
            echo "<p></p>";
        }

    }
?>