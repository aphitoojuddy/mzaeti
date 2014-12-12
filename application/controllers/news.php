<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/news
	 *	- or -  
	 * 		http://example.com/news/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /news/<method_name>
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
		// var_dump($news_data);exit;

		$nav_data = array(
				'current_page'		=> 'news'
			);

		$n_data = array(
				'lang'			=> $this->session->userdata('user_lang'),
				'news_data'		=> $news_data
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
		$this->load->view('navigation', $nav_data);
		$this->load->view('news', $n_data);
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
			$news_data = $this->article->get_news($this->uri->rsegment(3));
			// var_dump($news_data);exit;
			$n_data = array(
					'lang'			=> $this->session->userdata('user_lang'),
					'news_data'		=> $news_data
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
			$this->load->view('newsDetail', $n_data);
			$this->load->view('footer', $f_data);
		}else{
			redirect(site_url().'news', 'location');
		}
	}

	function _check_session_lang(){
		if(empty($this->session->userdata('user_lang'))) $this->session->set_userdata(array('user_lang' => 'id'));
	}
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */