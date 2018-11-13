<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {

		$data['users'] = $this->db->get('users')->result_array();

		if($this->input->post()) {
			$this->form_validation->set_rules('form_name', 'Navn', 'required|min_length[2]|max_length[150]');
			$this->form_validation->set_rules('form_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('form_password', 'Adgangskode', 'required|min_length[8]');
			$this->form_validation->set_rules('form_level', 'Options', 'required');

				if($this->form_validation->run()) {
				
					$user_data = array(
										'user_email' 		=> $this->input->post('form_email'),
										'user_password'		=> password_hash($this->input->post('form_password'),PASSWORD_DEFAULT),
										'user_name' 		=> $this->input->post('form_name'),
										'user_level' 		=> $this->input->post('form_level'),
										'user_desc'			=> $this->input->post('form_desc'),
										'user_character'	=> $this->input->post('form_character'),
										'user_charactertype'=> $this->input->post('form_charactertype')
								 	 );

					
				#File uploading starting
					
						$config['upload_path'] = FCPATH."assets/img/users";
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['encrypt_name'] = TRUE;

						$this->load->library('upload', $config);

						if($this->upload->do_upload('form_file')) {
							$user_data['user_image'] = $this->upload->data('file_name');
						}
					$this->db->insert('users',$user_data);

					redirect('users');	
				}
		}

		$data = array(
						'validation_errors' => validation_errors(),
						
					);


		$this->parser->parse('templates/header', $data);
		$this->parser->parse('templates/nav', $data);
		$this->parser->parse('templates/mainstart', $data);
		$this->parser->parse('users/create', $data);
		$this->parser->parse('templates/mainend', $data);
		$this->parser->parse('templates/footer', $data);
		
	}

		


}

	