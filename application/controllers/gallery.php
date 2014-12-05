<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/gallery
	 *	- or -  
	 * 		http://example.com/gallery/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /gallery/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
				'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
			);

		$this->load->view('header', $data);
		$this->load->view('navigation');
		$this->load->view('gallery', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */