<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Transactionhistory extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('M_transactionhistory' ,'',TRUE);
	}

	public function index()
	{          
		$data['alltransactions'] = $this->M_transactionhistory->getAllTransaction();
		$this->load->view('include/header');
        $this->load->view('TransactionView', $data);
		$this->load->view('include/footer');
	}	
}