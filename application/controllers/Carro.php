<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('Pessoa_Model','pessoa');
        $this->load->model('Carro_Model', 'carro');
    }

    public function index() {
        $lista['carros'] = $this->carro->listar();
        $lista['pessoas']=$this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa']=$this->input->post('idPessoa');
        
        $result = $this->carro->inserir($dados);
        if ($result == true) {
            redirect('carro');
        } else {
            redirect('carro');
        }
    }

    public function excluir($id) {
        $result = $this->carro->deletar($id);
        if ($result == true) {
            redirect('carro');
        } else {
            redirect('carro');
        }
    }

     public function editar($id) {
        $dados['carro'] = $this->carro->editar($id);
        $dados['pessoas']=$this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroEditar', $dados);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $dados['idCarro'] = $this->input->post('idCarro');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['portas'] = $this->input->post('portas');
        $dados['cor'] = $this->input->post('cor');
        $dados['placa'] = $this->input->post('placa');
        $dados['idPessoa']=$this->input->post('idPessoa');
        if ($this->carro->atualizar($dados) == true) {
            redirect('carro');
        } else {
            redirect('carro');
        }
    }

}
