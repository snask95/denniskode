<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function index(){
		

		$data = array(
						'create_link'=>	base_url('images/create'),
						'link_back' => base_url('images'),
						'index_link' => base_url('')
						
					);

		$data['images'] = $this->db->get('images')->result_array();
		
		foreach ($data['images'] as $key => $value) {
			$data['images'][$key]['updatelink'] = base_url('images/update/'.$data['images'][$key]['image_id']);
			$data['images'][$key]['readlink'] = base_url('images/read/'.$data['images'][$key]['image_id']);
			$data['images'][$key]['deletelink'] = base_url('images/delete/'.$data['images'][$key]['image_id']);
			$data['images'][$key]['image_file'] = base_url('assets/img/'.$data['images'][$key]['image_file']);

		}

		$this->parser->parse('template/header', $data);
		$this->parser->parse('images/images', $data);
		$this->parser->parse('template/footer', $data);
	
	}


	public function create(){ 

		if($this->input->post()){
			$config['upload_path'] = FCPATH."assets/img/";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;

				$this->load->library('upload',$config);

				if($this->upload->do_upload('formFile')){
					$image = array(
										'image_file'	=>	$this->upload->data('file_name'),
										
										'image_desc' => time()
									);

				

				if(!empty($this->input->post('image_desc'))) {
					$image['image_desc'] = $this->input->post('image_desc'); 
				}
					
					$this->db->insert('images',$image);
					redirect('images');
				}
				}
		$data['pages'] =$this->db->get('pages')->result_array();
		$data['link_back'] = base_url('images');

		

		$this->parser->parse('template/header', $data);
		$this->parser->parse('images/create', $data);
		$this->parser->parse('template/footer', $data);
	}


	public function read($image_id) {

		$data = $this->db->where('image_id',$image_id)->get('images')->row_array();
		
		$data['image_file'] = base_url('assets/img/'.$data['image_file']);
		$data['link_back'] = base_url('images');
	
		$this->parser->parse('template/header', $data);
		$this->parser->parse('images/read', $data);
		$this->parser->parse('template/footer', $data);	
	
	}

	public function update($image_id) {
		$data = $this->db->where('image_id', $image_id)->get('images')->row_array();

		if($this->input->post()) {

			$image = array();

			if(!empty($_FILES['formFile'])) {
				$config['upload_path'] = FCPATH."assets/img/";
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				unlink(FCPATH. "assets/img/" . $data['image_file']);

				if($this->upload->do_upload('formFile')) {
					$image['image_file'] = $this->upload->data('file_name');
				}
			}

			if(!empty($this->input->post('image_desc'))) {
				$image['image_desc'] = $this->input->post('image_desc');
			}

			$this->db->where('image_id', $image_id)->update('images', $image);

			redirect('images/update/'.$image_id);
		}
		
		$data['image_file'] = base_url('assets/img/'.$data['image_file']);
		$data['link_back'] = base_url('images');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('images/update', $data);
		$this->parser->parse('template/footer', $data);	
	}


	public function delete($image_id) {
		
		$data = $this->db->where('image_id', $image_id)->get('images')->row_array();
		
		if($this->input->post()) {
			$this->db->where('image_id', $image_id)->delete('images');
			unlink(FCPATH. "assets/img/", $data["image_file"]);

			redirect('images');
		}

		$data['image_file'] = base_url('assets/img/' . $data['image_file']);
		$data['link_back'] = base_url('images');

	

		
		$this->parser->parse('template/header', $data);
		$this->parser->parse('images/delete', $data);
		$this->parser->parse('template/footer', $data);	
	
	
	}


}

