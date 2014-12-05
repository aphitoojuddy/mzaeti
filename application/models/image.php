<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_image($id = '')
    {
        if(!empty($id)){
            $this->db->where('image_id', $id);
        }

        $query = $this->db->get('temp_images');
        return $query->row();
    }

    function insert_temp_image($image_data)
    {
        $this->image_title      = $image_data['i_title'];
        $this->image_desc       = $image_data['i_desc'];
        $this->image_path       = $image_data['i_image_file'];
        
        $this->db->trans_start();
        $this->db->insert('temp_images', $this);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function delete_temp_image($id)
    {
        return $this->db->delete('temp_images', array('image_id' => $id));
    }

}