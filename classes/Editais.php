<?php

class Editais
{
    public $id;
    public $numero;
    public $curso;
    public $disciplina;
    public $periodo;
    public $horario;
    public $diaSemana;
    public $cargaHorario;
    public $prazo;
    public $requisitos;
    public $administradoresId;
    public function listar()
    {
        $sql = "SELECT * FROM editais";
        include_once "conexao.php";
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}