<?php

class Produto
{
    
    public $descricao;
    public $estoque;
    public $preco;
    
    public function aumentarEstoque($novoEstoque) {
        $this->estoque += $novoEstoque;
    }
    
    public function diminuirEstoque($estoqueVendido) {
        $this->estoque -= $estoqueVendido;
    }
    
    public function reajustarPreco($aumento) 
    {
        $this->preco += ($aumento*$this->preco) / 100;
    }
    
}

$notebook = new Produto;
$notebook->descricao = "notebook de última geração";
$notebook->estoque = 50;
$notebook->preco = 2140;

echo "O $notebook->descricao tem
$notebook->estoque em estoque com o preço unitário de R$ $notebook->preco. <br>";

$notebook->aumentarEstoque(10);
$notebook->diminuirEstoque(5);
$notebook->reajustarPreco(50);

echo "O $notebook->descricao tem
$notebook->estoque em estoque com o preço unitário de R$ $notebook->preco. <br>";
















