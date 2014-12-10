<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/home
	 *	- or -  
	 * 		http://example.com/home/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /home/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_check_session_lang();
		$data = array(
				'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
			);

		$this->load->model('article');
		$news_data = $this->article->get_allnews();
		$members_data = $this->article->get_allmembers();

		$h_data = array(
				'lang'			=> $this->session->userdata('user_lang'),
				'news_data'		=> $news_data,
				'members_data'	=> $members_data
			);


		$this->load->model('siteconfig');
		$config_data = $this->siteconfig->get_setting('site_twitter');
		$site_data['twitter_id'] = $config_data->config_value;
		$config_data = $this->siteconfig->get_setting('site_address');
		$site_data['address'] = $config_data->config_value;

		$f_data = array(
				'site_data'		=> $site_data
			);

		$this->load->view('header', $data);
		$this->load->view('navigation');
		$this->load->view('home', $h_data);
		$this->load->view('footer', $f_data);
	}

	public function id()
	{
		$this->session->set_userdata(array('user_lang' => 'id'));
		redirect($_SERVER['HTTP_REFERER'], 'location');
	}

	public function en()
	{
		$this->session->set_userdata(array('user_lang' => 'en'));
		redirect($_SERVER['HTTP_REFERER'], 'location');
	}

	function _check_session_lang(){
		if(empty($this->session->userdata('user_lang'))) $this->session->set_userdata(array('user_lang' => 'id'));
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */