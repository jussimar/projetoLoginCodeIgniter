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
}
