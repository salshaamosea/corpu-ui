<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_allinone()
	{
	}
}
