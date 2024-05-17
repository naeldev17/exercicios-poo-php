<?php

namespace Projeto\Atividade;

class Usuario
{
  public string $nome;
  public string $senha;
  public string $email;
  public string $listaAmigos;

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setSenha(string $senha): void
  {
    $this->senha = $senha;
  }

  public function getSenha(): string
  {
    return $this->senha;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setListaAmigos(string $listaAmigos): void
  {
    $this->listaAmigos = $listaAmigos;
  }

  public function getListaAmigos(): string
  {
    return $this->listaAmigos;
  }

  public function exibeInformacoes(): void {
    print "o nome do usuário é '{$this->getNome()}', a sua senha é: {$this->getSenha()}, seu email: {$this->getEmail()}, a sua lista de amigos: {$this->getListaAmigos()}\n";
  }
}
