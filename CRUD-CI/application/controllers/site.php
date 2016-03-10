<?php

/**
* 
*/
class Site extends CI_Controller
{
	
	function index()
	{
		$data = array();

		// $this->load->view('options_view');

		if($query = $this->site_model->get_records())
		{
			$data['records']=$query;
		}

		$this->load->view('options_view', $data);
	}

	function create()
	{
		$data = array(
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content')
			);
		if(isset($data)){
			$this->site_model->add_record($data);
		}
		$this->index();
	}

	function update(){
		$data  = array(
				'title' => 'My freshly updated title',
				'content' => 'Content shouold go there it is updated.'
			);
		$this->site_model->update_record($data);
	}

	function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	}

}