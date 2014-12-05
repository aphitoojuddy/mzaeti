<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regulation extends CI_Controller {
	private $page_title = "AETI - Regulation Management";

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://aeti.or.id/mzadm/regulation
	 *	- or -  
	 * 		http://aeti.or.id/mzadm/regulation/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://aeti.or.id/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /regulation/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_check_session();
		$this->load->model('article');
		
		$regulations_data = $this->article->get_allregulation();

		$h_data = array(
					'page_id'		=> '',
					'page_title'	=> $this->page_title,
					'page_css'		=> ''
				);

		$n_data = array(
					'user_name' 	=> $this->session->userdata('user_displayname')
				);

		$r_data = array(
					'regulations_data'	=> $regulations_data,
					'add_success'		=> $this->session->flashdata('add_success'),
					'error_msg'			=> $this->session->flashdata('error_msg')
				);

		$f_data = array(
					'page_js'		=> $this->_data_table_js('lib'),
					'extra_js'		=> $this->_validate_form_js('addRegulation')
				);

		$view_files = array(
					'mzadm/header' => $h_data, 
					'mzadm/headerBlock' => '',
					'mzadm/navigation' => $n_data,
					'mzadm/regulation' => $r_data,
					'mzadm/footerBlock' => '',
					'mzadm/footer' => $f_data
				);
		$this->_load_views($view_files);
	}

	public function add(){
		$this->_check_session();
		$this->load->library('form_validation');

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
		redirect(site_url().'mzadm/regulation', 'location');
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
					var \$editUser = $('#edit_user').validate({
					// Rules for form validation
						rules : {
							i_uname : {
								required : true,
								minlength : 4,
							},
							i_email : {
								required : true,
								email : true
							},
							i_reemail : {
								required : true,
								email : true,
								equalTo : '#i_email'
							}
						},
				
						// Messages for form validation
						messages : {
							i_uname : {
								required : 'Please enter your first name',
								minlength : 'Please enter at least 4 characters'
							},
							i_email : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address'
							},
							i_reemail : {
								required : 'Please enter your email address',
								email : 'Please enter a VALID email address',
								equalTo : 'Please enter the same email as above'
							}
						},
				
						// Do not change code below
						errorPlacement : function(error, element) {
							error.insertAfter(element.parent());
						}
					});
				";
		}
	}

	function _data_table_js($type = 'lib'){
		if($type == 'lib'){
			return "
					<script src=\"".js_url('mzadm/plugin/datatables/jquery.dataTables.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/datatables/dataTables.colVis.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/datatables/dataTables.tableTools.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/datatables/dataTables.bootstrap.min.js')."\"></script>
					<script src=\"".js_url('mzadm/plugin/datatable-responsive/datatables.responsive.min.js')."\"></script>
				";
		}else{
			return "
					/*
					 * Data Tables JS
					 */
					var responsiveHelper_dt_basic = undefined;
					
					var breakpointDefinition = {
						tablet : 1024,
						phone : 480
					};
		
					$('#dt_basic').dataTable({
						\"sDom\": \"<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>\"+
							\"t\"+
							\"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>\",
						\"autoWidth\" : true,
						\"preDrawCallback\" : function() {
							// Initialize the responsive datatables helper once.
							if (!responsiveHelper_dt_basic) {
								responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
							}
						},
						\"rowCallback\" : function(nRow) {
							responsiveHelper_dt_basic.createExpandIcon(nRow);
						},
						\"drawCallback\" : function(oSettings) {
							responsiveHelper_dt_basic.respond();
						}
					});
					/*
					 * Data Tables JS
					 */
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

/* End of file regulation.php */
/* Location: ./application/controllers/mzadm/regulation.php */