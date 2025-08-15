<?php

require_once(__DIR__ . "/../model/Aluno.php");

class AlunoService{

    public function validarAluno(Aluno $aluno){

            $erros = [];    

            if(! $aluno->getNome()){
                array_push($erros, "informe o nome do aluno");
            }
            if(! $aluno->getIdade()){
                array_push($erros, "informe a idade do aluno");
            }
            if(! $aluno->getEstrangeiro()){
                array_push($erros, "informe se o aluno é estrangeiro");
            }

            if(! $aluno->getCurso()->getId()){
                array_push($erros, "informe o curso do aluno");
            } 


            return $erros;

    }
}
