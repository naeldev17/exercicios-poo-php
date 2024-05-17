<?php

namespace Projeto\Atividade;

use DateTime;

class Funcionario1
{
  public string $nome;
  public string $cargo;
  public float $salario;
  public array $historicoSalario = [];
  public array $dataAlteracao = [];

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setCargo(string $cargo): void
  {
    $this->cargo = $cargo;
  }

  public function getCargo(): string
  {
    return $this->cargo;
  }

  public function setSalario(float $salario): void
  {
    $this->salario = $salario;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function atualizaSalario(array $historicoSalario, array $dataAlteracao): array
  {
    return $this->salario = $historicoSalario;

    $this->historicoSalario[] = ['data_alteracao' => $dataAlteracao, 'valor_salario' => $historicoSalario];
  }

  public function imprimeSalario(float $historicoSalario): void
  {
    print "seu novo salário é: {$historicoSalario}";
  }

  public function imprimeInformacoes(): void
  {
    print "nome do funcionario: {$this->getNome()}, o seu cargo é '{$this->getCargo()}', e o seu salário é: {$this->getSalario()}\n";
    //  print "novo salário: {$this->imprimeSalario()}";
  }
}

// criar um método que atualize o salário adicionando o novo salário no array.
