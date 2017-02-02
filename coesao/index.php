<?php 
function carregaClasse($classe){
	require $classe.".php";
}
spl_autoload_register("carregaClasse");

$dev = new Funcionario
$dev->setSalario(3100);
$dev->setCargo(new Desenvolvedor());

$calculadora = new CalculadoraDeSalario();

echo $calculadora->calcula($dev);
?>