<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //precarregando models para todos os metdos
        $this->load->model('Exercicio_model');
        $this->load->model('Elemento_model');
        $this->load->model('Formula_model');

        $this->load->library('IComb', 'icomb');
    }

    public function resolucao($id) {
        $formula = $this->Formula_model->GetAll();

        $exercicio = $this->Exercicio_model->GetById($id);

        $idUniverso = $exercicio->universo_id;
        $elementosUniverso = $this->Elemento_model->GetByUniverse($idUniverso);

        $arrayDadosExercicio = array('exercicio' => $exercicio, 'formula' => $formula, 'elementosUniverso' => $elementosUniverso);


        $this->load->view('/layout/header.php');
        $this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
        $this->load->view('exercicio/exercicio', $arrayDadosExercicio);
        $this->load->view('/layout/footer.php');


        //carrega o exercicio completo
        $exercicioFull = $this->Exercicio_model->GetWithFullSolution($id);
        //chama iniciar icomb
        $this->icomb->iniciaDesenvolvimento($exercicioFull);
    }

    public function indicador() {
        $formula = $this->Formula_model->GetAll();
        $arrayDadosExercicio = array('formula' => $formula);

        $this->load->view('/layout/header.php');
        $this->load->view('/layout/menu-exercicio.php', $arrayDadosExercicio);
        $this->load->view('/exercicio/indicador.php');
        $this->load->view('/layout/footer.php');
    }

    public function ValidaCondicao() {
        $condicao = new stdClass();
        $condicao->numElementos = $_POST['num_elementos'];
        $condicao->numPropriedades = $_POST['num_propriedades'];
        $condicao->atributo = $_POST['atributo'];
        $condicao->pertence = $_POST['pertence'];
        $condicao->caracteristica = $_POST['caracteristica'];
        $msg = $this->icomb->validaCondicao($condicao);
        //$msg = "OK";
        echo $msg;
    }

}
