<?php

namespace Projeto\Atividade;

class Aluno
{
  public string $nome;
  public float $idade;
  public string $curso;

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setIdade(string $idade): void
  {
    $this->idade = $idade;
  }

  public function getIdade(): float
  {
    return $this->idade;
  }

  public function setCurso(string $curso): void
  {
    $this->curso = $curso;
  }

  public function getCurso(): string
  {
    return $this->curso;
  }

  public function exibeInformacoes()
  {
    print "Informações do aluno: nome '{$this->getNome()}', idade: {$this->getIdade()}, curso: {$this->getCurso()}\n";
  }
}
