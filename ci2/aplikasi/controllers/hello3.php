<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Hello3 extends CI_Controller
{
	var $name;
	var $color;

	function __construct()
	{
		parent::__construct();

		$this->name = "Sheila";
		$this->color = "blue";
	}

	function you($firstname='', $lastname='')
	{
		$data['name']=($firstname)?$firstname.' '.$lastname:$this->name;
		$data['color']=$this->color;

		$this->load->view('you_view2',$data);
	}
}
?>

<!-- TRY TO RUN THIS CONTROLLER WITH ADDING VALUE ON URL AS BELOW -->
<!-- http://localhost/ci2/index.php/hello3/you/dendi/sunardi -->