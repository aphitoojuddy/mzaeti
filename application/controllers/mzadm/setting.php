<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/setting
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/setting/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /setting/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
					'page_title'	=> 'AETI - Site Administration'
				);

		$this->load->view('mzadm/header', $data);
		$this->load->view('mzadm/navigation');
		$this->load->view('mzadm/setting', $data);
		$this->load->view('mzadm/footer', $data);
	}
}

/* End of file setting.php */
/* Location: ./application/controllers/mzadm/setting.php */