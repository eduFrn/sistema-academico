<?php

    class Aluno{

        private $cpf;
        private $nome;
        private $turma;
        private $rg;

        public function setCpf($cpf){
            $this->cpf=$cpf;
        }
        public function setNome($nome){
            $this->nome=$nome;
        }

        public function getCpf(){
            return $this->cpf;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setTurma($turma){

            switch ($turma){
                case 1:
                    $turma = '1º A';
                    break;
                case 2:
                    $turma = '1º B';
                    break;
                case 3:
                    $turma = '2º A';
                    break;
                case 4:
                    $turma = '3º A';
                    break;
            }

            $this->turma=$turma;
        }

        public function getTurma(){
            return $this->turma;
        }

        public function setRg($rg){
            $this->rg=$rg;
        }

        public function getRg(){
            return $this->rg;
        }

    }

?>