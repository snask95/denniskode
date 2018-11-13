<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index() {

		$data = array(
			'create_link' 	=> base_url('events/create'),
			'index_link'	=> base_url('')
		);

		$data['events'] = $this->db->get('events')->result_array();

		foreach($data['events'] as $key => $value) {
			$data['events'][$key]['readlink'] = base_url('eventss/read/'.$value['event_id']);
			$data['events'][$key]['updatelink'] = base_url('events/update/'.$value['event_id']);
			$data['events'][$key]['deletelink'] = base_url('events/delete/'.$value['event_id']);
		}

		$this->parser->parse('template/header', $data);
		$this->parser->parse('events/event', $data);
		$this->parser->parse('template/footer', $data);
		
	}

	public function create() {
		if($this->input->post()) {
			$this->form_validation->set_rules('content', 'Brødtekst', 'required');
			
			if($this->form_validation->run()) {
				$event_data = array(
									'event_content' => $this->input->post('event_kalender'),
									'event_content' => $this->input->post('content')
									);

				$this->db->insert('events',$event_data);

				redirect('events');
			}	
		}
			

		$data = array(
						'validation_errors' => validation_errors(),
						'link_back' 		=> base_url('events')
					);

		$this->parser->parse('template/header', $data);
		$this->parser->parse('events/create', $data);
		$this->parser->parse('template/footer', $data);
		
	}

	public function update($event_id) {
		if($this->input->post()) {
			$this->form_validation->set_rules('content', 'Brødtekst', 'required');
			
			if($this->form_validation->run()) {
				$event_data = array(
									'event_content' => $this->input->post('event_kalender'),
									'event_content' => $this->input->post('content')
									);

				$this->db->where('event_id', $event_id)->update('events',$event_data);

				redirect('events');
			}	
		}
		
		$this->db->where('event_id',$event_id)->get('events')->row_array();


		$data = array(
						'validation_errors' => validation_errors(),
						'link_back' 		=> base_url('events')
					);


		$this->parser->parse('template/header', $data);
		$this->parser->parse('events/update', $data);
		$this->parser->parse('template/footer', $data);
		
	}

	public function delete($event_id) {

		if($this->input->post()) {
			$this->db->where('event_id', $event_id);
			$this->db->delete('events');
			redirect('events');
		}

		$this->db->where('event_id', $event_id);
		$data = $this->db->get('events')->row_array();

		$data['link_back'] = base_url('events');

		$this->parser->parse('template/header', $data);
		$this->parser->parse('events/delete', $data);
		$this->parser->parse('template/footer', $data);
	}
}
