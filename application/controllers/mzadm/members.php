<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/members
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/members/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /members/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_check_session();
		$this->load->model('article');
		
		$members_data = $this->article->get_allmembers();

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Members Management',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$s_data = array(
					'members_data'	=> $members_data,
					'msg_success'	=> $this->session->flashdata('msg_success'),
				);

		$f_data = array(
					'page_js'		=> '',
					'extra_js'		=> ''
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/members' => $s_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function add()
	{
		$this->_check_session();

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> 'AETI - Add News',
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' => $this->session->userdata('user_displayname')
				);

		$m_data = array(
					'msg_success'	=> $this->session->flashdata('msg_success'),
					'error_msg'		=> $this->session->flashdata('error_msg'),
					'step'			=> 0
				);

		$f_data = array(
					'page_js'		=> $this->_summernote('lib'),
					'extra_js'		=> $this->_summernote('block')
				);

		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$this->load->model('article');
			$image_temp = $this->article->get_member($this->uri->rsegment(3));
			if (!empty($image_temp)) {
				$m_data['step']	= 1;
				$m_data['image_temp']	= $image_temp;
			}
		}else{
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
		}

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/membersAdd' => $m_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function upload_file(){
		$this->_check_session();
		$this->load->library('form_validation');

		$post_data = $this->input->post(NULL);
		if(!empty($post_data)){
			$config = array(
							array(
								'field'   => 'i_title_id',
								'label'   => 'Company Name Indonesian',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_title_en',
								'label'   => 'Company Name English',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_content_id',
								'label'   => 'Company Profile in Indonesian',
								'rules'   => 'trim|required'
							),
							array(
								'field'   => 'i_content_en',
								'label'   => 'Company Profile in English',
								'rules'   => 'trim|required'
							)
						);

			$this->form_validation->set_rules($config);

			$config['upload_path'] = './assets/img/logo/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '0';
			$config['remove_spaces'] = TRUE;

			$this->load->library('upload', $config);

			if ($this->form_validation->run() == TRUE && $this->upload->do_upload('i_image_file'))
			{
				$post_data['excerpt'] = $this->_clean($post_data['i_title_id']);
				$post_data['i_image_file'] = $this->upload->file_name;
				$this->load->model('article');
				$image_temp_id = $this->article->insert_member_logo($post_data);
				$ra_data['msg_success'] = "Add Member Success";
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/members/add/'.$image_temp_id, 'location');
			}else{
				$error_msg = $this->form_validation->error_array();
				$error_msg['i_image_file'] = $this->upload->display_errors('', '');
				var_dump($error_msg);
				/*$error = array(
						'error_msg' => $error_msg
					);
				$this->session->set_flashdata($error);*/
			}
		}
		redirect(site_url().'mzadm/members/add/', 'location');
	}

	public function thumbnail(){
		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$this->load->model('article');
			$image_temp = $this->article->get_member($this->uri->rsegment(3));
			if (!empty($image_temp)) {
				// var_dump($image_temp);
				// var_dump(getimagesize(img_url('gallery/'.$image_temp->image_path)));
				$post_data = $this->input->post(NULL);
				
				$targ_ori_w = $targ_ori_h = $post_data['ow'];
				$targ_w = $targ_h = $post_data['w'];
				$jpeg_quality = 100;

				$src = img_url('logo/'.$image_temp->downloadable_content);
				// echo $src;exit;
				if(pathinfo($src, PATHINFO_EXTENSION) == 'png'){
					$img_ori_r = imagecreatefrompng($src);
				}else if (pathinfo($src, PATHINFO_EXTENSION) == 'gif') {
					$img_ori_r = imagecreatefromgif($src);					
				}else{
					$img_ori_r = imagecreatefromjpeg($src);
				}

				$dst_ori_r = ImageCreateTrueColor( $targ_ori_w, $targ_ori_h );

				imagecopyresampled($dst_ori_r,$img_ori_r,0,0,$post_data['ox1'],$post_data['oy1'],$targ_ori_w,$targ_ori_h,$post_data['ow'],$post_data['oh']);
				// exit;
				// header('Content-type: image/jpeg');
				$filepath = './assets/img/logo/';
				$bigname = 'big'.$targ_ori_w.'_'.time().'_'.$image_temp->downloadable_content;
				imagejpeg($dst_ori_r, $filepath.$bigname, $jpeg_quality);
				
				$src_r = img_url('logo/'.$bigname);
				$img_r = imagecreatefromjpeg($src_r);
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
				imagecopyresampled($dst_r,$img_r,0,0,0,0,$targ_w,$targ_h,$targ_ori_w,$targ_ori_h);
				$thumbname = 'thumb'.$targ_w.'_'.time().'_'.$image_temp->downloadable_content;
				imagejpeg($dst_r, $filepath.$thumbname, $jpeg_quality);

				imagedestroy($dst_ori_r);
				imagedestroy($dst_r);
				imagedestroy($img_r);

				// $image_temp->excerpt = $this->_clean($image_temp->image_title);
				$image_temp->downloadable_content = $bigname;
				$image_temp->downloadable_content_extra = $thumbname;
				// $this->load->model('article');
				$image_id = $this->article->update_member($image_temp);

				$ra_data['msg_success'] = "Add Member Success";
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/members', 'location');
			}
		}
		$error = array(
				'error_msg' => "Error Creating Image Thumbnail"
			);
		$this->session->set_flashdata($error);
		redirect(site_url().'mzadm/gallery', 'location');
	}

	public function edit()
	{
		$this->_check_session();

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
					<script src=\"".js_url('mzadm/plugin/jquery-form/jquery-form.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/jcrop/jquery.Jcrop.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/jcrop/jquery.color.min.js')."\"></script>
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

					
					/*
					 * JCROP
					 */
					// aspect ratio

					var aspect_ratio = function() {

						// Create variables (in this scope) to hold the API and image size
						var jcrop_api, boundx, boundy,

						// Grab some information about the preview pane
						\$preview = $('#preview-pane'), \$pcnt = $('#preview-pane .preview-container'), \$pimg = $('#preview-pane .preview-container img'), xsize = \$pcnt.width(), ysize = \$pcnt.height();

						// Grab some information about the original file
						var img = new Image();
						img.onload = function() {
							$('#owd').val(this.width);
							$('#ohd').val(this.height);
						}
						img.src = $('#target-3').attr('src');

						console.log('init', [xsize, ysize]);
						$('#target-3').Jcrop({
							onChange : updatePreview,
							onSelect : updatePreview,
							aspectRatio : xsize / ysize
						}, function() {
							// Use the API to get the real image size
							var bounds = this.getBounds();
							boundx = bounds[0];
							boundy = bounds[1];
							// Store the API in the jcrop_api variable
							jcrop_api = this;

							// Move the preview into the jcrop container for css positioning
							\$preview.appendTo(jcrop_api.ui.holder);
						});

						function updatePreview(c) {
							if (parseInt(c.w) > 0) {
								var rx = xsize / c.w;
								var ry = ysize / c.h;

								\$pimg.css({
									width : Math.round(rx * boundx) + 'px',
									height : Math.round(ry * boundy) + 'px',
									marginLeft : '-' + Math.round(rx * c.x) + 'px',
									marginTop : '-' + Math.round(ry * c.y) + 'px'
								});
							}

							$('#x1').val(c.x);
							$('#y1').val(c.y);
							$('#x2').val(c.x2);
							$('#y2').val(c.y2);
							$('#w').val(c.w);
							$('#h').val(c.h);
							$('#wd').val($('#target-3').width());
							$('#hd').val($('#target-3').height());

							var ox1 = Math.ceil((c.x / $('#target-3').width()) * $('#owd').val());
							var oy1 = Math.ceil((c.y / $('#target-3').height()) * $('#ohd').val());
							var ox2 = Math.ceil((c.x2 / $('#target-3').width()) * $('#owd').val());
							var oy2 = Math.ceil((c.y2 / $('#target-3').height()) * $('#ohd').val());

							$('#ox1').val(ox1);
							$('#oy1').val(oy1);
							$('#ox2').val(ox2);
							$('#oy2').val(oy2);
							$('#ow').val(ox2 - ox1);
							$('#oh').val(oy2 - oy1);
						};
					}
					// end aspect_ratio

					aspect_ratio();
				";
		}
	}

	function _clean($string) {
		$string = str_replace(' ', '-', strtolower($string)); // Replaces all spaces with hyphens.
		$string = substr($string, 0, 20); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
	}

	function _check_session(){
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

/* End of file members.php */
/* Location: ./application/controllers/mzadm/members.php */