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

}
