<?php 

class Banco {
	
	private $lista = array();
	private static $count = 1;
	private static $novo = 10;

	protected function __construct()
    {
    }

	public function addContato($contato) {
		array_push($this->lista, $contato);
	}

	public function getContatos() {
		$c1 = new Contato();
		$c1->nome = "Felipe Silva";
		$c1->email = "felipesilva@exemplo.com";
		$c1->telefone="011-3232-6656";	

		$c2 = new Contato();
		$c2->nome = "Carla Mendes";
		$c2->email = "carlamendes@exemplo.com";
		$c2->telefone="011-7845-1256";

		$c3 = new Contato();
		$c3->nome = "Gustavo Henrique";
		$c3->email = "gustavo@exemplo.com";
		$c3->telefone="011-4578-5451";

		$banco = Banco::getInstance();
		$banco->addContato($c1);
		$banco->addContato($c2);
		$banco->addContato($c3);

		return $this->lista;
	}

	public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new Banco();
        }
        return $instance;
    }


}

?>
