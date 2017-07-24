<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {
	public function index()
	{
		// Recupera os contatos através do model
		$exercicio = $this->Exercicio_model->GetAll('exercicio');
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();

		$arrayExercicio = array('exercicio' => $exercicio, 'formula' => $formula);
		$this->load->view('exercicio/get', $arrayExercicio);
	}

	public function resolucao($id)
	{
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();

		$exercicio = $this->Exercicio_model->GetById($id);
		$arrayDadosExercicio = array('exercicio' => $exercicio, 'formula' => $formula);

		//$this->load->view('/layout/header.php');		
		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('exercicio/exercicio', $arrayDadosExercicio);
		$this->load->view('/layout/footer.php');
	}

	public function indicador()
	{	
		$this->load->model('Formula_model');
		$formula = $this->Formula_model->GetAll();
		$arrayDadosExercicio = array('formula' => $formula);

		$this->load->view('/layout/header.php');
		$this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
		$this->load->view('/exercicio/indicador.php');
		$this->load->view('/layout/footer.php');
	}

	public function teste()
    {
        //$teste = ($_POST);
        // var_dump($teste);
        // die();
        $PostP=$_POST['p'];
        $PostN=$_POST['n'];
        $PostFormula=$_POST['formula'];

        $formulax = 1;
        $nx = 4;
        $px = 1;
    }

     public function ValidaCondicao()
    {
    	$validaExer = 1;
		$validaNumElement = 1;
		$validaNumPropried = 1;
		$validaAtributo = 1;
		$validaPertence = 1;
		$validaCaract = 1;

		$numElementos = $_POST['num_elementos'];
		$numPropriedades = $_POST['num_propriedades'];
		$atributo = $_POST['atributo'];
		$pertence = $_POST['pertence'];
		$caracteristica = $_POST['caracteristica'];
		
			if($numElementos == $validaNumElement){				
				if ($numPropriedades == $validaNumPropried) {					
					if ($atributo == $validaAtributo) {					
						if ($pertence == $validaPertence) {							
							
							if ($caracteristica == $validaCaract) {
								echo "Dados de condição CORRETOS!!! Passe para a Etapa 2"; 
							}else echo "Valor de elemento incorreto";
						
						}else echo "Pertinência(é/não é) incorreto";
					}else echo "Tipo de atributo incorreto";
				}else echo "Número de propriedade(s) incorreta(s)";
			}else echo "Número de elementos incorretos";
		
	}
}
