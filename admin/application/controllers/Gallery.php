<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index(){
		

		$data = array(
						'create_link'=>	base_url('gallery/create'),
						'link_back' => base_url('gallery'),
						'index_link' => base_url('')
						
					);

		$data['gallery'] = $this->db->get('gallery')->result_array();
		
		foreach ($data['gallery'] as $key => $value) {
			$data['gallery'][$key]['updatelink'] = base_url('gallery/update/'.$data['gallery'][$key]['gallery_id']);
			$data['gallery'][$key]['readlink'] = base_url('gallery/read/'.$data['gallery'][$key]['gallery_id']);
			$data['gallery'][$key]['deletelink'] = base_url('gallery/delete/'.$data['gallery'][$key]['gallery_id']);
		}

		$this->parser->parse('template/header', $data);
		$this->parser->parse('gallery/gallery', $data);
		$this->parser->parse('template/footer', $data);
	
	}


	public function create() { 

		if($this->input->post()) {
			$this->form_validation->set_rules('gallery_name', 'Galleri navn', 'required');

			if($this->form_validation->run()) {
				$gallery_data = array(
										'gallery_name' => $this->input->post('gallery_name')
									);

				$this->db->insert('gallery', $gallery_data);
				redirect('gallery');
			}
		}


		$data['validation_errors'] = validation_errors();
		$data['link_back'] = base_url('gallery');


		$this->parser->parse('template/header', $data);
		$this->parser->parse('gallery/create', $data);
		$this->parser->parse('template/footer', $data);
	}


	public function read($gallery_id) {

		$data = $this->db->where('gallery_id', $gallery_id)->get('gallery')->row_array();
		
		$data['link_back'] = base_url('gallery');
	
		$this->parser->parse('template/header', $data);
		$this->parser->parse('gallery/read', $data);
		$this->parser->parse('template/footer', $data);	
	
	}

	public function update($gallery_id) {

		if($this->input->post()) {
			$this->form_validation->set_rules('gallery_name', 'Galleri navn', 'required');

			if($this->form_validation->run()) {
				$gallery_data = array(
										'gallery_name' => $this->input->post('gallery_name')
									);
			

				$this->db->where('gallery_id', $gallery_id);
				$this->db->update('gallery', $gallery_data);
				redirect('gallery');
			}
		}

		$data = $this->db->where('gallery_id', $gallery_id)->get('gallery')->row_array();
		$data['validation_errors'] = validation_errors();
		$data['link_back'] = base_url('gallery');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('gallery/update', $data);
		$this->parser->parse('template/footer', $data);	
	}


	public function delete($gallery_id) {
		
		$data = $this->db->where('gallery_id', $gallery_id)->get('gallery')->row_array();
		
		if($this->input->post()) {
			$this->db->where('gallery_id', $gallery_id)->delete('gallery');

			redirect('gallery');
		}
	
		$data['link_back'] = base_url('gallery');
		
		$this->parser->parse('template/header', $data);
		$this->parser->parse('gallery/delete', $data);
		$this->parser->parse('template/footer', $data);	
	
	}

}

