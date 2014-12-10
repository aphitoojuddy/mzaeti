<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siteconfig extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_allsetting($type = 'general')
    {
        if(!empty($type)){
            $this->db->where('config_type', 'general');
        }

        $query = $this->db->get('configs');
        return $query->result();
    }
    
    function get_setting($var_name = '')
    {
        if(!empty($var_name)){
            $this->db->where('config_var', $var_name);
        }

        $query = $this->db->get('configs');
        return $query->row();
    }

    function update_setting($user_data)
    {
        foreach ($user_data as $key => $value) {
            $temp = array(
                'config_value' => $value
            );
            $this->db->where('config_var', $key);
            $this->db->update('configs', $temp);
        }
    }
}