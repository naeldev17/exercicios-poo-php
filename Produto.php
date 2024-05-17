<?php

namespace Projeto\Atividade;

class Produto
{
	private string $nome;
	private float $preco;
	// private float $desconto;
	private string $categoria;
	public float $percentualDesconto;


	public function __construct(string $nome, float $preco, string $categoria)
	{
		$this->nome = $nome;
		$this->preco = $preco;
		$this->categoria = $categoria;
	}

	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	public function getPreco(): float
	{
		return $this->preco;
	}

	public function setPreco(float $preco): void
	{
		$this->preco = $preco;
	}

	public function getCategoria(): string
	{
		return $this->categoria;
	}

	public function setCategoria(string $categoria): void
	{
		$this->categoria = $categoria;
	}

	public function getPercentualDesconto(): float
	{
		return $this->percentualDesconto;
	}

	public function setPercentualDesconto(float $percentualDesconto): void
	{
		$this->percentualDesconto = $percentualDesconto;
	}

	public function getDesconto($percentualDesconto): float
	{
		return ($this->preco * $percentualDesconto) / 100;
	}

	public function aplicarDesconto($percentualDesconto): float
	{
		// print $percentualDesconto;
		return $this->preco - $this->getDesconto($percentualDesconto);
	}

	public function exibePercentual($percentualDesconto): float
	{
		$valorComDesconto = $this->aplicarDesconto($percentualDesconto);
		return print "Desconto de: {$valorComDesconto} reais " . PHP_EOL;
	}

	public function imprimeInformacoes(): void
	{
		print "O nome do produto é: '{$this->getNome()}', o preço original é '{$this->getPreco()}', e a sua categoria é: {$this->getCategoria()}\n";
	}
}
