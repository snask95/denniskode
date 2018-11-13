<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {

		$data = array(
			'create_link' 	=> base_url('videos/create'),
			'index_link' 	=> base_url ('')
		);

		$data['videos'] = $this->db->get('videos')->result_array();

		foreach($data['videos'] as $key => $value) {
			$data['videos'][$key]['updatelink'] = base_url('videos/update/'.$value['video_id']);
			$data['videos'][$key]['deletelink'] = base_url('videos/delete/'.$value['video_id']);
			$data['videos'][$key]['readlink'] = base_url('videos/read/'.$value['video_id']);
		}		

		$this->parser->parse('template/header', $data);
		$this->parser->parse('videos/videos', $data);
		$this->parser->parse('template/footer', $data);
	}

	public function create() {
		if($this->input->post()) {

		#File uploading starting
			$config['upload_path'] = FCPATH . "assets/video";
			$config['allowed_types'] = 'mp4';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);

			if($this->upload->do_upload('video_file')) {
				$video = array(
					'video_event_id' => 0, // Her skal event id være :-)
					'video_link' => $this->upload->data('file_name'),
					'video_title' => $this->input->post('title_video'),
					'video_desc' => $this->input->post('video_desc'),
					'video_ref' => ''
				);

				$this->db->insert('videos', $video);

				redirect('videos');
			}
		}

		$data = array(
						'link_back' => base_url('videos')
					);

		$this->parser->parse('template/header', $data);
		$this->parser->parse('videos/create', $data);
		$this->parser->parse('template/footer', $data);
	}

	public function read($video_id) {

		$data = $this->db->where('video_id',$video_id)->get('videos')->row_array();
		
		$data['video_link'] = base_url('assets/video/'.$data['video_link']);
		$data['link_back'] = base_url('videos');
	
		$this->parser->parse('template/header', $data);
		$this->parser->parse('videos/read', $data);
		$this->parser->parse('template/footer', $data);	
	
	}

	public function update($video_id) {
		$data = $this->db->where('video_id', $video_id)->get('videos')->row_array();

		if($this->input->post()) {

			$video = array();

			if(!empty($_FILES['video_file'])) {
				$config['upload_path'] = FCPATH . "assets/video/";
				$config['allowed_types'] = 'mp4';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				unlink(FCPATH. "assets/video/" . $data['video_link']);

				if($this->upload->do_upload('video_file')) {
					$video['video_link'] = $this->upload->data('file_name');
				}
			}


			if(!empty($this->input->post('video_desc'))) {
				$video['video_desc'] = $this->input->post('video_desc');
				$video['video_title'] = $this->input->post('title_video');
				
			}
			
			$this->db->where('video_id', $video_id)->update('videos', $video);
			
			redirect('videos');
			
		}

		$data = $this->db->where('video_id', $video_id)->get('videos')->row_array();

		$data['video_link'] = base_url('assets/video/'. $data['video_link']);
		$data['link_back'] = base_url('videos');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('videos/update', $data);
		$this->parser->parse('template/footer', $data);

	}

	

	public function delete($video_id) {

		$data = $this->db->where('video_id', $video_id)->get('videos')->row_array();

		if($this->input->post()) {
			$this->db->where('video_id', $video_id)->delete('videos');
			unlink(FCPATH. "assets/video/", $data[video_link]);

			redirect('videos');
		}

		$data['video_link'] = base_url('assets/video/'. $data['video_link']);
		$data['link_back'] = base_url('videos');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('videos/delete', $data);
		$this->parser->parse('template/footer', $data);
	}
}