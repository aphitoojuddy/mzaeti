<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/members
	 *	- or -  
	 * 		http://example.com/members/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /members/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_check_session_lang();
		$data = array(
				'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
			);

		$this->load->model('article');
		$members_data = $this->article->get_allmembers();
		// var_dump($news_data);exit;
		$n_data = array(
				'lang'			=> $this->session->userdata('user_lang'),
				'members_data'		=> $members_data
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
		$this->load->view('members', $n_data);
		$this->load->view('footer', $f_data);
	}

	public function detail()
	{
		$this->_check_session_lang();
		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {

			$data = array(
					'page_title'	=> 'AETI - Asosiasi Eksportir Timah Indonesia'
				);

			$this->load->model('article');
			$member_data = $this->article->get_member($this->uri->rsegment(3));
			// var_dump($news_data);exit;
			$n_data = array(
					'lang'			=> $this->session->userdata('user_lang'),
					'news_data'		=> $member_data
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
			$this->load->view('membersDetail', $n_data);
			$this->load->view('footer', $f_data);
		}else{
			redirect(site_url().'news', 'location');
		}
	}

	function _check_session_lang(){
		if(empty($this->session->userdata('user_lang'))) $this->session->set_userdata(array('user_lang' => 'id'));
	}
}

/* End of file members.php */
/* Location: ./application/controllers/members.php */