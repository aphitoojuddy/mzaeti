<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_user_byid($userid)
    {
        $params = array( 
                    'user_id'     => $userid
                );
        $query = $this->db->get_where('users', $params, 1);
        return $query->row();
    }
    
    function get_user($user, $password)
    {
        $mode = 'user_login';
        if (valid_email($user)) $mode = 'user_email';

        $params = array( 
                    $mode           => $user,
                    'user_pass'     => md5($password),
                    'user_status'   => 1
                );
        $query = $this->db->get_where('users', $params, 1);
        return $query->result();
    }
    
    function get_alluser($status = '')
    {
        $params = '';
        if(!empty($status)){
            $this->db->where('user_status', $status);
        }

        $query = $this->db->get('users');
        return $query->result();
    }

    function insert_user($user_data)
    {
        $this->user_login       = strtolower($user_data['i_uname']);
        $this->user_pass        = md5($user_data['i_pass']);
        $this->user_email       = $user_data['i_email'];
        $this->user_registered  = date("Y-m-d H:i:s");
        $this->user_status      = 1;
        $this->user_displayname = $user_data['i_dname'];

        return $this->db->insert('users', $this);
    }

    function update_user_data($user_data)
    {
        $this->user_login           = $user_data['i_uname'];
        $this->user_email           = $user_data['i_email'];
        $this->user_displayname     = $user_data['i_dname'];

        return $this->db->update('users', $this, array('user_id' => $user_data['i_userid']));
    }

}