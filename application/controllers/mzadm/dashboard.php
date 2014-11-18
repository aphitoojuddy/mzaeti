<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/mzadm/dashboard
	 *	- or -  
	 * 		http://example.com/mzadm/dashboard/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /dashboard/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
					'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
				);

		$this->load->view('mzadm/header', $data);
		$this->load->view('mzadm/navigation');
		$this->load->view('mzadm/home', $data);
		$this->load->view('mzadm/footer', $data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/mzadm/dashboard.php */