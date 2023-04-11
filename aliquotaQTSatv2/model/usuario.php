<?php

//classe usuario
    class usuario{
        private $nome;
        private $cpf; 
        private $rendimento;

        public function __construct($nome, $cpf, $rendimento) {

            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->rendimento = $rendimento;
            $this->aliquota = $this->aliquota();
            $this->imposto = $this->calcImposto();

        }

        //funcao para calcular imposto
        public function calcImposto(){

            if ($this->aliquota == 0) {
                return 0;
            }
            else {
               $this->imposto = $this->rendimento * ($this->aliquota / 100);

                return $this->imposto;
            }
        }

        //getters e setters
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setRendimento($rendimento){
            $this->rendimento = $rendimento;
            $this->aliquota = $this->aliquota();
            $this->imposto = $this->calcImposto();
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getRendimento(){
            return $this->rendimento;
        }

        public function getAliquota(){
            return $this->aliquota;
        }

        public function getImposto(){
            return $this->imposto;
        }

        
        //funcao para calcular aliquota
        public function aliquota(){

            if ($this->rendimento <= 22847.76) {
                return 0;
            }
            else if ($this->rendimento > 22847.76 && $this->rendimento <= 33919.80) {
                return 7.5;
            }
            else if ($this->rendimento > 33919.80 && $this->rendimento <= 45012.60) {
               return 15;
            }
            else if ($this->rendimento > 45012.60 && $this->rendimento <= 55976.16) {
                return 22.5;
            }
            else {
                return 27.5;
            }


        }

        

        
    }

?>