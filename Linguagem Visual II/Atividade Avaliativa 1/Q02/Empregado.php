<?php
class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function aumentarSalario($porcentagem) {
        $this->salarioMensal *= (1 + ($porcentagem / 100));
    }

    public function salarioAnual() {
        return $this->salarioMensal * 12;
    }
}
?>
