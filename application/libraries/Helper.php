<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Helper
{
	var $CI;

	public function __construct()
	{
		date_default_timezone_set("America/Mexico_City");
		$this->CI =& get_instance();
	}


}
