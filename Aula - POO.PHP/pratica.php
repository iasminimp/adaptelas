<?php #by Iasmin Marques Pereira - 17/07/2022
/*Construa uma classe
Crie seus atributos
Crie os atributos dessa classe
Depois crie um objeto que utilize essa classe e seus métodos. */

/*class name_class { // classe
    //atributos da classe
    private $atributo1; //private, public, protected : limita o acesso
    protected $atributo2;
    public $atributo3;

    //métodos da class name_class
    function getAtributo1(): float {
        return $this->atributo1;
    }
    function getAtributo2(): int {
        return $this->atributo2;
    }
} 
//objetos
    $objeto1 = new name_class ();
    $objeto2 = new name_class ();

*/

class pessoa { // classe
    public $nome; //atributos da classe
    public $idade;
    public $cpf;

    // métodos
    public function alteraIdade (int $idade){ // modificar a idade
        $this->idade = $idade;
    }
    public function alteraCPF (int $cpf){ // modificar O cpf
        $this->cpf = $cpf;
    }

    public function alteraNome (string $nome){ // modificar o nome
        $this->nome = $nome;
    }
}

$pessoa1 = new pessoa(); //objeto pessoa1
//atribuindo os valores para o objeto pessoa1
$pessoa1->nome = "Iasmin Marques";
$pessoa1->idade = 23;
$pessoa1->cpf = 100000000;

echo $pessoa1->nome ."\n".  $pessoa1->idade ."\n". $pessoa1->cpf."\n"; //impressão dos dados (verificação)

$pessoa1 -> alteraIdade(24); // chamando o método de alterar idade
$pessoa1 -> alteraCPF(12345678900); // chamando o método de alterar CPF
$pessoa1 ->  alteraNome ("Iasmin Marques Pereira");
echo $pessoa1->nome ."\n".  $pessoa1->idade ."\n". $pessoa1->cpf."\n"; //dados alterados

?>