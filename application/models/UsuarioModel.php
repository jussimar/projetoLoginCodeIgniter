<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

	public function inserir(){
		$data =  array(
			'nm_usuario' => $this->input->post('nome'),
			'ds_email' => $this->input->post('email'),
			'cod_senha' => md5($this->input->post('senha'))
		);

		return $this->db->insert("tb_usuario",$data);
	}

	public function inserirEndereco(){
		$data =  array(
			'ds_rua' => $this->input->post('rua'),
			'nr_local' => $this->input->post('numero'),
			'ds_bairro' => $this->input->post('bairro'),
			'ds_cidade' => $this->input->post('cidade'),
			'ds_estado' => $this->input->post('estado')
		);

		return $this->db->insert("tb_endereco",$data);
	}


	public function logar(){
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$this->db->where('ds_email',$email);
		$this->db->where('cod_senha',$senha);

		$usuario =  $this->db->get("tb_usuario")->row_array();

		if($usuario){
			$this->session->set_userdata("logado",$usuario);
			redirect(base_url('home'));
		}else{
			redirect(base_url('login'));
		}
	}

	public function sair(){
		$this->session->unset_userdata('logado');
		redirect(base_url('login'));
	}

	public function listarEndereco(){
		$query = $this->db->get("tb_endereco");
		return $query->result();
	}
}
