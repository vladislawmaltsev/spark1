<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		
		//$this->form_validation->set_rules('search', 'Search', 'trim|required|secure');
		
		//if ($this->form_validation->run() === FALSE) {
			
			$search = $this->input->post('search');
			$search_row = $this->member_model->search_member($search);
			$data['search_row'] = $search_row;
			$data['title'] = 'Search Profiles';
			$this->load->view('search_view',$data);
			return;
		//}
		
	}
}
