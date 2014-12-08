<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/news
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/news/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /news/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->check_session();
		$this->load->model('article');
		
		$news_data = $this->article->get_allnews();

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - News Management',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$s_data = array(
					'news_data'	=> $news_data,
					'msg_success'		=> $this->session->flashdata('msg_success'),
				);

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/news' => $s_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function add()
	{
		$this->check_session();

		$post_data = $this->input->post(NULL);
		if(!empty($post_data)){
			// var_dump($post_data);exit;
			$this->load->library('form_validation');
			$config = array(
							array(
								'field'   => 'i_title_id',
								'label'   => 'Title in Indonesian',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_title_en',
								'label'   => 'Title in English',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_content_id',
								'label'   => 'Content in Indonesian',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_content_en',
								'label'   => 'Content in English',
								'rules'   => 'trim|required'
							)
						);

			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == TRUE)
			{
				$post_data['excerpt'] = $this->_clean($post_data['i_title_id']);
				$this->load->model('article');
				$this->article->insert_news($post_data);
				$ra_data['msg_success'] = "Add news Success";
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/news', 'location');
			}else{
				$error_msg = $this->form_validation->error_array();
				// var_dump($error_msg);exit;
				$error['error_msg'] = $error_msg;
				$this->session->set_flashdata($error);
				redirect(site_url().'mzadm/news/add', 'location');
			}
		}

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Add News',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$s_data = array(
					'msg_success'		=> $this->session->flashdata('msg_success'),
					'error_msg'		=> $this->session->flashdata('error_msg')
				);

		$f_data = array(
					'page_js'		=> $this->_summernote('lib'),
					'extra_js'		=> $this->_summernote('block')
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/newsAdd' => $s_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function edit()
	{
		$this->check_session();

		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$post_data = $this->input->post(NULL);
			if(!empty($post_data)){
				// var_dump($post_data);exit;
				$this->load->library('form_validation');
				$config = array(
								array(
									'field'   => 'i_title_id',
									'label'   => 'Title in Indonesian',
									'rules'   => 'trim|required'
								),
								array(
									'field'   => 'i_title_en',
									'label'   => 'Title in English',
									'rules'   => 'trim|required'
								),
								array(
									'field'   => 'i_content_id',
									'label'   => 'Content in Indonesian',
									'rules'   => 'trim|required'
								),
								array(
									'field'   => 'i_content_en',
									'label'   => 'Content in English',
									'rules'   => 'trim|required'
								)
							);

				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == TRUE)
				{
					$post_data['article_id'] = $this->uri->rsegment(3);
					$post_data['excerpt'] = $this->_clean($post_data['i_title_id']);
					$this->load->model('article');
					$this->article->update_news($post_data);
					$ra_data['msg_success'] = "Edit news Success";
					$this->session->set_flashdata($ra_data);
					redirect(site_url().'mzadm/news', 'location');
				}else{
					$error_msg = $this->form_validation->error_array();
					// var_dump($error_msg);exit;
					$error['error_msg'] = $error_msg;
					$this->session->set_flashdata($error);
					redirect(site_url().'mzadm/news/add', 'location');
				}
			}

			$this->load->model('article');
			$news_data = $this->article->get_news($this->uri->rsegment(3));
			// var_dump($news_data);exit;
			$h_data = array(
						'page_id'		=> '',
						'page_title'	=> 'AETI - Add News',
						'page_css'		=> ''
					);

			$n_data = array(
						'user_name' 	=> $this->session->userdata('user_displayname')
					);

			$s_data = array(
						'news_data'		=> $news_data,
						'msg_success'	=> $this->session->flashdata('msg_success'),
						'error_msg'		=> $this->session->flashdata('error_msg')
					);

			$f_data = array(
						'page_js'		=> $this->_summernote('lib'),
						'extra_js'		=> $this->_summernote('block')
					);

			$view_files = array(
						'mzadm/header' => $h_data, 
						'mzadm/headerBlock' => '',
						'mzadm/navigation' => $n_data,
						'mzadm/newsEdit' => $s_data,
						'mzadm/footerBlock' => '',
						'mzadm/footer' => $f_data
					);
			$this->_load_views($view_files);
		}else{
			redirect(site_url().'mzadm/news', 'location');
		}
	}

	public function delete($article_id){
		if(!empty($article_id)){
			$this->load->model('article');
			$image_temp = $this->article->get_article($article_id);
			if (!empty($image_temp)) {
				if ($this->article->delete_article($article_id)) {
					$data['msg_success'] = "Delete News Success";
				}else{
					$data['msg_error'] = "Failed deleting news";
				}
			}else{
				$data['msg_error'] = "Failed deleting news";
			}

			$this->session->set_flashdata($data);
		}

		redirect(site_url().'mzadm/news', 'location'); 
	}

	function _summernote($type = 'lib'){
		if($type == 'lib'){
			return "
					<script src=\"".js_url('mzadm/plugin/summernote/summernote.min.js')."\"></script>
				";
		}else{
			return "
					/*
					 * SUMMERNOTE EDITOR
					 */
					
					$('#i_content_id').summernote({
						height : 180,
						focus : false,
						tabsize : 2
					});

					$('#i_content_en').summernote({
						height : 180,
						focus : false,
						tabsize : 2
					});
				";
		}
	}

	function _clean($string) {
		$string = str_replace(' ', '-', strtolower($string)); // Replaces all spaces with hyphens.
		$string = substr($string, 0, 20); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
	}

	function check_session(){
		if(empty($this->session->userdata('is_logged_in'))) redirect(site_url().'mzadm/login', 'location');
	}

	function _load_views($array_view){
		foreach ($array_view as $key => $value) {
			if($value != ''){
				$this->load->view($key, $value);
			}else{
				$this->load->view($key);
			}
			
		}
	}
}

/* End of file news.php */
/* Location: ./application/controllers/mzadm/news.php */