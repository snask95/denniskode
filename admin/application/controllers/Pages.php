<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index() {

			$data = array(
						'index_link' 	=> base_url(''),
						'create_link'	=> base_url('pages/create')
					);

		$data['pages'] = $this->db->get('pages')->result_array();

		foreach($data['pages'] as $key => $value) {
			$data['pages'][$key]['readlink'] = base_url('pages/read/'.$value['page_id']);
			$data['pages'][$key]['updatelink'] = base_url('pages/update/'.$value['page_id']);
			$data['pages'][$key]['deletelink'] = base_url('pages/delete/'.$value['page_id']);
		}
		

		$this->parser->parse('template/header', $data);
		$this->parser->parse('pages/pages', $data);
		$this->parser->parse('template/footer', $data);

	}

	public function create() {
		if($this->input->post()) {
			$this->form_validation->set_rules('page_topcontent', 'Top tekst', 'max_length[150]');

			if($this->form_validation->run()) {

				$page_data = array(
									'page_headline' => $this->input->post('page_headline'),
									'page_content' => $this->input->post('page_content'),
									'page_topcontent' => $this->input->post('page_topcontent'),
									'page_slug' => url_title($this->input->post('page_headline'), 'dash', TRUE),
									'page_published' => date('Y-d-m'),
								);


				$this->db->insert('pages',$page_data);
				redirect('pages');
			}
		}

		$data = array(
						'validation_errors' => validation_errors(),
						'link_back' 		=> base_url('pages')
					);



		$this->parser->parse('template/header', $data);
		$this->parser->parse('pages/create', $data);
		$this->parser->parse('template/footer', $data);
		
	}

	public function read($page_id) {

		$data = $this->db->where('page_id',$page_id)->get('pages')->row_array();
		
		
		$data['link_back'] = base_url('pages');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('pages/read', $data);
		$this->parser->parse('template/footer', $data);
	}

	public function update($page_id) {
		if($this->input->post()) {
			$this->form_validation->set_rules('topcontent', 'Top tekst', 'max_length[150]');

			if($this->form_validation->run()) {

				$page_data = array(
									'page_headline' => $this->input->post('page_headline'),
									'page_content' => $this->input->post('page_content'),
									'page_topcontent' => $this->input->post('page_topcontent'),
									'page_slug' => url_title($this->input->post('page_headline'), 'dash', TRUE),
									'page_published' => date('Y-d-m'),
								);

				$this->db->where('page_id',$page_id);
				$this->db->update('pages', $page_data);
				redirect('pages');
			}
		}

		$data = $this->db->where('page_id', $page_id)->get('pages')->row_array();


		$data['validation_errors'] = validation_errors();
		$data['link_back'] = base_url('pages');


		$this->parser->parse('template/header', $data);
		$this->parser->parse('pages/update', $data);
		$this->parser->parse('template/footer', $data);
	}

	public function delete($page_id) {

		if($this->input->post()) {
			$this->db->where('page_id', $page_id);
			$this->db->delete('pages');
			redirect('pages');
		}

		$this->db->where('page_id', $page_id);
		$data = $this->db->get('pages')->row_array();

		$data['link_back'] = base_url('pages');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('pages/delete', $data);
		$this->parser->parse('template/footer', $data);
	}
}
