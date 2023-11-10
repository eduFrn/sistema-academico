<?php

    class AlunoController{

        public function validaCpf($cpf){
                    
            $cpf = str_replace(".","",$cpf);
            $cpf = str_replace("-","",$cpf);

            $vetorCpf = array();

            for($i=0; $i<strlen($cpf);$i++){
                $vetorCpf[$i]=substr($cpf,$i,1);
            }

            $contador = 10;
            $soma1 = 0;

            for($i = 0; $i < 9; $i++){
                $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
                $contador--;
            }

            $resto1 = ($soma1 % 11);

            if ($resto1 < 2){
                $digito1 = 0;
            }
            else{
                $digito1 = 11 - $resto1;
            }
            
            $contador = 11;
            $soma2 = 0;
            for($i = 0; $i < 9; $i++){
                $soma2 = $soma2 + ($vetorCpf[$i] * $contador);
                $contador--;
            }
            $soma2 = $soma2 + ($digito1 * $contador);
            
            $digito2 = ($soma2 % 11);
            
            if ($digito2 < 2)
                $digito2 = 0;
            else
                $digito2 = 11 - $digito2;
            
            //verificando se os dígitos informados são iguais aos calculados
            if(($digito1 == $vetorCpf[9]) && ($digito2 == $vetorCpf[10])){
                return true;
            }else{
                return false;
            }

        }

    }
