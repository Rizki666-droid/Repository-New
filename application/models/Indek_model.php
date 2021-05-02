<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Indek_model extends CI_Model
{
	
	public function get_data()
	{
		$cars = array(
			array('Audi', 22, 18)
			,array('BMW', 15, 13)
			,array('Ferrari', 5, 2)
			,array('LandRover', 17, 18)
		);

		return $cars;
	}
}