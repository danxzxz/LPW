<?php

require_once(__DIR__ . "/../dao/AlunoDAO.php");
require_once(__DIR__ . "/../model/Aluno.php");
require_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController {

    private AlunoDAO $alunoDAO;
    private AlunoService $alunoService;

    public function __construct() {
        $this->alunoDAO = new AlunoDAO(); 
        $this->alunoService = new AlunoService();       
    }

    public function listar() {
        $lista = $this->alunoDAO->listar();
        return $lista;
    }
        public function buscarPorId($id) {
        $aluno = $this->alunoDAO->buscarPorId($id);
        return $aluno;
    }

    public function inserir(Aluno $aluno) {
        $erros = $this->alunoService->validarAluno($aluno);

        if(count($erros) > 0) {
            return $erros;
        }
        //se nao tiver erros, chama o dao
        
        $erro = $this->alunoDAO->inserir($aluno);
        if($erro) {
            array_push($erros, "Erro ao salvar o aluno!");
            if(AMB_DEV)
                array_push($erros, $erro->getMessage());
        }

        return $erros;
    }

    public function Alterar(Aluno $aluno) {
        $erros = $this->alunoService->validarAluno($aluno);

        if(count($erros) > 0) 
            return $erros;
        

        //se nao tiver erros, alterar o aluno no banco de dados
        $erro = $this->alunoDAO->alterar($aluno);
        if($erro) {
            array_push($erros, "Erro ao salvar o aluno!");
            if(AMB_DEV)
                array_push($erros, $erro->getMessage());
        }
        return $erros;

    }



}