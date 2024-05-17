<?php

// require_once '/home/ipeweb/source/php-estudos/avancado.ex/Livro.php';


require_once 'autoloadz.php';

use Projeto\Atividade\Livro;
use Projeto\Atividade\Produto;
use Projeto\Atividade\Funcionario1;
use Projeto\Atividade\Aluno;
use Projeto\Atividade\Usuario;


// $livro = new Livro();
// $livro->setTitulo("O Senhor dos Anéis");
// $livro->setAutor("J.R.R. Tolkien");
// $livro->setAno("1954");
// $livro->imprimirInformacoes();

// print "\n";

// $livro2 = new Livro();
// $livro2->setTitulo("O Hobbit");
// $livro2->setAutor("J.R.R Tolkien");
// $livro2->setAno("1937");
// $livro2->imprimirInformacoes();

// print "\n";

$produto = new Produto("produto:", 60, "desconto:", 20); 
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto->setNome("Maçã");
$produto->setPreco(60);
$produto->setCategoria("Alimento");
$produto->imprimeInformacoes();
$produto->exibePercentual($percentualDesconto);

print "\n";

$produto2 = new Produto("produto:", 80, "desconto:", 20);
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto2->setNome("Relógio");
$produto2->setPreco(80);
$produto2->setCategoria("Acessório");
$produto2->imprimeInformacoes();
$produto2->exibePercentual($percentualDesconto);

print "\n";

$produto3 = new Produto("produto:", 120, "desconto:", 20);
$percentualDesconto = 20;
$precoFinal = $produto->getDesconto($percentualDesconto);
$produto3->setNome("Camiseta");
$produto3->setPreco(120);
$produto3->setCategoria("Vestimenta");
$produto3->imprimeInformacoes();
$produto3->exibePercentual($percentualDesconto);


// print "\n";

// $funcionario = new Funcionario1();
// $funcionario->setNome('Roberto');
// $funcionario->setCargo('Gerente');
// $funcionario->setSalario(4500);
// $funcionario->imprimeInformacoes();
// $funcionario->imprimeSalario(8500);

// print "\n";

// $funcionario = new Funcionario1();
// $funcionario->setNome('Cleide');
// $funcionario->setCargo('Supervisora');
// $funcionario->setSalario(1900);
// $funcionario->imprimeInformacoes();
// $funcionario->imprimeSalario(2300);

// print "\n";

// $funcionario = new Funcionario1();
// $funcionario->setNome('Rosária');
// $funcionario->setCargo('Desenvolvedora');
// $funcionario->setSalario(3800);
// $funcionario->imprimeInformacoes();
// $funcionario->imprimeSalario(4600);

// print "\n";

// $aluno1 = new Aluno();
// $aluno1->setNome('Matias');
// $aluno1->setIdade(19);
// $aluno1->setCurso('Sistemas de Informação');
// $aluno1->exibeInformacoes();

// print "\n";

// $aluno2 = new Aluno();
// $aluno2->setNome('Kleber');
// $aluno2->setIdade(29);
// $aluno2->setCurso('Curso de Engenharia');
// $aluno2->exibeInformacoes();

// print "\n";

// $aluno3 = new Aluno(); 
// $aluno3->setNome('Artur'); 
// $aluno3->setIdade(23); 
// $aluno3->setCurso('Medicina'); 
// $aluno3->exibeInformacoes(); 

// print "\n";

// $usuario1 = new Usuario();
// $usuario1->setNome('Juracy');
// $usuario1->setSenha('Wde123');
// $usuario1->setEmail('Juracy@gmail.com');
// $usuario1->setListaAmigos('Nathan, Livia, João');
// $usuario1->exibeInformacoes();

// print "\n";

// $usuario2 = new Usuario();
// $usuario2->setNome('Neomar');
// $usuario2->setSenha('lc4s23');
// $usuario2->setEmail('Neomarlc@gmail.com');
// $usuario2->setListaAmigos('Ruan, Japa, Maria');
// $usuario2->exibeInformacoes();

// print "\n";

// $usuario3 = new Usuario();
// $usuario3->setNome('Luiza');
// $usuario3->setSenha('lu23ds3');
// $usuario3->setEmail('Luiza12@gmail.com');
// $usuario3->setListaAmigos('Levi, Carla, Laura');
// $usuario3->exibeInformacoes();


