<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('UsuarioModel');
	}

	public function cadastrarUsuario(){
		$usuario = new UsuarioModel;
		$usuario->inserir();
		redirect(base_url('login'));
	}

	public function cadastrarEndereco(){
		$usuario = new UsuarioModel;
		$usuario->inserirEndereco();
		redirect(base_url('lista'));
	}

	public function listarEndereco(){
		$usuario = new UsuarioModel;
		$data['data'] = $usuario->listarEndereco();
		$this->load->view('lista',$data);
	}

	public function entrar(){
		$usuario = new UsuarioModel;
		$usuario->logar();
	}

	public function sair(){
		$usuario = new UsuarioModel;
		$usuario->sair();
	}

}
