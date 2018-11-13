<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index() {
		
	
	

		/*if($this->input->post()){
				$this->form_validtaion->set_rules('user_email','E-Mail','required');
				$this->form_validtaion->set_rules('user_password','Password','required');

				if ($this->form_validtaion->run()) {
					$this->db->where('user_email',$this->input->post('user_email'));
					$sqlQuery = $this->db->get('users');

					if($sqlQuery->num_rows()){

						$dbFetch = $sqlQuery->row();

						if(password_verify($this->input->post('user_password'),$user['user_password'])){
					unset($user['user_password']);
					$this->session->set_userdata('user',$user);
					redirect();

				}
			}
		}
	}*/

			$data = $this->db->get('pages')->row_array();
		/*// Henter menupunkterne fra pages tabellen
		$query = $this->db->select('page_headline, page_slug')->get('pages');
		$data['navigation'] = $query->result_array();

		// Henter byer fra cities tabellen
		$query = $this->db->select('page_id, page_hedline, page_content, page_topcontent, page_slug')->get('pages');
		$data['pages'] = $query->result_array();*/

			$data['bglink'] = base_url('assets/img/login.png');
			$data['skovlink'] = base_url('assets/img/tempuh.png');
			$data['error'] = validation_errors();


			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('index', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}



	public function arrangementer(){

		$data = $this->db->where('page_id',6)->get('pages')->row_array();


			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('arrangementer', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}

		public function blivmedlem(){

		$data = $this->db->where('page_id',4)->get('pages')->row_array();

		
			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('blivmedlem', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}

	public function kontakt(){

	$data = $this->db->where('page_id',5)->get('pages')->row_array();	

		
			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('contact', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}

	public function galleri(){

		

		$data = array(
						'page_content' => 'page_content',
						'page_topcontent' => 'page_topcontent');

			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('galleri', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}

	public function nyheder(){

		$data = $this->db->where('page_id',3)->get('pages')->row_array();

		
			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('news', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}

	public function finfo(){

		$data = $this->db->where('page_id',2)->get('pages')->row_array();


			$this->parser->parse('templates/header', $data);
			$this->parser->parse('templates/nav', $data);
			$this->parser->parse('templates/mainstart', $data);
			$this->parser->parse('finfo', $data);
			$this->parser->parse('templates/mainend', $data);
			$this->parser->parse('templates/footer', $data);
	}


}

	