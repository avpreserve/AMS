<?php

/**
 * Dashboard Controller
 * 
 * PHP version 5
 * 
 * @category   AMS
 * @package    CI
 * @subpackage Controller
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AVPS http://ams.avpreserve.com
 * @version    GIT: <$Id>
 * @link       http://ams.avpreserve.com
 */

/**
 * Dashboard Class
 *
 * @category   Class
 * @package    CI
 * @subpackage Controller
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AVPS http://ams.avpreserve.com
 * @link       http://ams.avpreserve.com
 */
class Searchd extends MY_Controller
{

	/**
	 * Constructor.
	 * 
	 * Load the layout for the dashboard.
	 *  
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('searchd_model');
		
		
	}

	/**
	 * Dashboard Functionality
	 * 
	 * @return view dashboard/index
	 */
	function index(){
		$this->searchd_model->check_sphnix();
	}
	

}

// END Dashboard Controller

// End of file dashboard.php 
/* Location: ./application/controllers/dashboard.php */