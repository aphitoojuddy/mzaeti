<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	private $page_title = "AETI - Gallery Management";

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/gallery
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/gallery/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /gallery/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_check_session();
		$this->load->model('article');
		
		$gallery_data = $this->article->get_allgallery();
		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> $this->page_title,
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' 	=> $this->session->userdata('user_displayname')
				);

		$g_data = array(
					'gallery_data'	=> $gallery_data,
					'add_success'	=> $this->session->flashdata('add_success'),
					'error_msg'		=> $this->session->flashdata('error_msg')
				);

		$f_data = array(
					'page_js'		=> $this->_superbox_js('lib'),
					'extra_js'		=> $this->_superbox_js('superbox')
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/gallery' => $g_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function add(){
		$this->_check_session();
		$this->load->library('form_validation');

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> $this->page_title,
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' 	=> $this->session->userdata('user_displayname')
				);

		$ga_data = array(
					'add_success'	=> 0,
					'step'			=> 0
				);

		$f_data = array(
					'page_js'		=> $this->_validate_form_js('lib'),
					'extra_js'		=> $this->_validate_form_js('addImage')
				);

		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$this->load->model('image');
			$image_temp = $this->image->get_image($this->uri->rsegment(3));
			if (!empty($image_temp)) {
				$ga_data['step']	= 1;
				$ga_data['image_temp']	= $image_temp;
			}
		}else{
			$post_data = $this->input->post(NULL, TRUE);
			if(!empty($post_data)){
				$config = array(
								array(
									'field'   => 'i_title',
									'label'   => 'Title',
									'rules'   => 'trim|required'
								)
							);

				$this->form_validation->set_rules($config);

				$config['upload_path'] = './assets/upload/';
				$config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png';
				$config['max_size'] = '0';
				$config['remove_spaces'] = TRUE;

				$this->load->library('upload', $config);
				if ($this->form_validation->run() == TRUE && $this->upload->do_upload('i_regulation_file'))
				{
					$post_data['excerpt'] = $this->_clean($post_data['i_title']);
					$post_data['i_regulation_file'] = $this->upload->file_name;
					$this->load->model('article');
					$this->article->insert_regulation($post_data);
					$ra_data['add_success'] = 1;
					$this->session->set_flashdata($ra_data);
					redirect(site_url().'mzadm/regulation', 'location');
				}else{
					$error_msg = $this->form_validation->error_array();
					$error_msg['i_regulation_file'] = $this->upload->display_errors('', '');
					$error = array(
							'error_msg' => $error_msg
						);
					$this->session->set_flashdata($error);
					redirect(site_url().'mzadm/regulation', 'location');
				}
			}

		}
		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/galleryAdd' => $ga_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function upload_file(){
		$this->_check_session();
		$this->load->library('form_validation');

		$post_data = $this->input->post(NULL);
		// var_dump($post_data);	
		if(!empty($post_data)){
			$config = array(
							array(
								'field'   => 'i_title',
								'label'   => 'Title',
								'rules'   => 'trim|required'
							)
						);

			$this->form_validation->set_rules($config);

			$config['upload_path'] = './assets/img/gallery/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '0';
			$config['remove_spaces'] = TRUE;

			$this->load->library('upload', $config);
			if ($this->form_validation->run() == TRUE && $this->upload->do_upload('i_image_file'))
			{
				$post_data['excerpt'] = $this->_clean($post_data['i_title']);
				$post_data['i_image_file'] = $this->upload->file_name;
				$this->load->model('image');
				$image_temp_id = $this->image->insert_temp_image($post_data);
				$ra_data['add_success'] = 1;
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/gallery/add/'.$image_temp_id, 'location');
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
	}

	public function thumbnail(){
		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$this->load->model('image');
			$image_temp = $this->image->get_image($this->uri->rsegment(3));
			if (!empty($image_temp)) {
				// var_dump($image_temp);exit;
				$post_data = $this->input->post(NULL, TRUE);
				// var_dump($post_data);exit;

				$targ_ori_w = $targ_ori_h = 500;
				$targ_w = $targ_h = 250;
				$jpeg_quality = 100;

				$src = img_url('gallery/'.$image_temp->image_path);
				// echo $src;exit;
				$img_r = imagecreatefromjpeg($src);
				$dst_ori_r = ImageCreateTrueColor( $targ_w, $targ_h );
				$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

				imagecopyresampled($dst_ori_r,$img_r,0,0,$_POST['x1'],$_POST['y1'],$targ_ori_w,$targ_ori_h,$_POST['w'],$_POST['h']);
				imagecopyresampled($dst_r,$img_r,0,0,$_POST['x2'],$_POST['y2'],$targ_w,$targ_h,$_POST['w'],$_POST['h']);
				// exit;
				// header('Content-type: image/jpeg');
				$bigname = 'big'.$targ_ori_w.'_'.time().'_'.$image_temp->image_path;
				$thumbname = 'thumb'.$targ_w.'_'.time().'_'.$image_temp->image_path;
				$filepath = './assets/img/gallery/';
				imagejpeg($dst_ori_r, $filepath.$bigname, $jpeg_quality);
				imagejpeg($dst_r, $filepath.$thumbname, $jpeg_quality);
				imagedestroy($dst_ori_r);
				imagedestroy($dst_r);
				imagedestroy($img_r);

				$image_temp->excerpt = $this->_clean($image_temp->image_title);
				$image_temp->image_path = $bigname;
				$image_temp->thumbnail = $thumbname;
				$this->load->model('article');
				$image_id = $this->article->insert_image($image_temp);

				$ra_data['add_success'] = 1;
				$this->session->set_flashdata($ra_data);
				redirect(site_url().'mzadm/gallery', 'location');
			}
		}
		$error = array(
				'error_msg' => "Error Creating Image Thumbnail"
			);
		$this->session->set_flashdata($error);
		redirect(site_url().'mzadm/gallery', 'location');
	}

	/*public function edit(){
		$this->_check_session();
		$this->load->model('users');
		$this->load->helper('url');
		
		if (!empty($this->uri->rsegment(3)) && is_numeric($this->uri->rsegment(3))) {
			$this->load->library('form_validation');

			$user_data = $this->users->get_user_byid($this->uri->rsegment(3));
			unset($user_data->user_pass);

			$h_data = array(
						'page_id'		=> '',
						'page_title'	=> $this->page_title,
						'page_css'		=> ''
					);

			$n_data = array(
						'user_name' 	=> $this->session->userdata('user_displayname')
					);

			$ue_data = array(
						'edit_data'		=> $user_data,
						'edit_success'	=> 0
					);

			$f_data = array(
						'page_js'		=> $this->_validate_form_js('lib'),
						'extra_js'		=> $this->_validate_form_js('editUser')
					);

			if(!empty($this->input->post(NULL, TRUE))){

				$config = array(
								array(
									'field'   => 'i_uname',
									'label'   => 'Username',
									'rules'   => 'trim|required'
								),
								array(
									'field'   => 'i_email',
									'label'   => 'Email',
									'rules'   => 'trim|required|valid_email'
								),
								array(
									'field'   => 'i_reemail',
									'label'   => 'Email Confirmation',
									'rules'   => 'trim|required|valid_email|matches[i_email]'
								),   
								array(
									'field'   => 'i_dname',
									'label'   => 'Display Name',
									'rules'   => 'trim|required'
								)
							);

				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == TRUE)
				{
					$this->users->update_user_data($this->input->post(NULL, TRUE));
					$ue_data['edit_success'] = 1;
				}
			}else{

			}

			$view_files = array(
						'mzadm/header' => $h_data, 
						'mzadm/headerBlock' => '',
						'mzadm/navigation' => $n_data,
						'mzadm/userEdit' => $ue_data,
						'mzadm/footerBlock' => '',
						'mzadm/footer' => $f_data
					);
			$this->_load_views($view_files);
		}else{
			redirect('404');
		}
	}*/

	function _clean($string) {
		$string = str_replace(' ', '-', strtolower($string)); // Replaces all spaces with hyphens.
		$string = substr($string, 0, 20); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
	}

	function _validate_form_js($type = 'lib'){
		if($type == 'lib'){
			return "
					<script src=\"".js_url('mzadm/plugin/jquery-form/jquery-form.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/jcrop/jquery.Jcrop.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/jcrop/jquery.color.min.js')."\"></script>
				";
		}elseif ($type == 'addRegulation') {
			return "
					var \$addRegulation = $('#add_regulation').validate({
					// Rules for form validation
						rules : {
							i_title : {
								required : true
							}
						},
				
						// Messages for form validation
						messages : {
							i_title : {
								required : 'Please enter regulation title'
							}
						},
				
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
				";
		}else{
			return "
					// aspect ratio

					var aspect_ratio = function() {

						// Create variables (in this scope) to hold the API and image size
						var jcrop_api, boundx, boundy,

						// Grab some information about the preview pane
						\$preview = $('#preview-pane'), \$pcnt = $('#preview-pane .preview-container'), \$pimg = $('#preview-pane .preview-container img'), xsize = \$pcnt.width(), ysize = \$pcnt.height();

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
						};
					}
					// end aspect_ratio

					aspect_ratio();
				";
		}
	}

	function _superbox_js($type = 'lib'){
		if($type == 'lib'){
			return "
					<script src=\"".js_url('mzadm/plugin/superbox/superbox.min.js')."\"></script>
				";
		}else{
			return "
					$('.superbox').SuperBox();
				";
		}
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

/* End of file gallery.php */
/* Location: ./application/controllers/mzadm/gallery.php */