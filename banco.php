<?php 

class Banco {
	
	private $lista = array();

	protected function __construct()
    {
    }

	public function addContato($contato) {
		array_push($this->lista, $contato);
	}

	public function getContatos() {
		return $this->lista;
	}

	public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }


}

?>
