<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_allgallery($status = '')
    {
        $params = '';
        $this->db->where('article_category', 'gallery');
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->result();
    }

    function insert_image($article_data)
    {
        $this->article_author       = $this->session->userdata['user_id'];
        $this->article_type         = 'image';
        $this->article_category     = 'gallery';
        $this->article_title_id     = $article_data->image_title;
        $this->article_title_en     = $this->article_title_id;
        $this->article_excerpt      = $article_data->excerpt;
        $this->article_content_id   = $article_data->image_desc;
        $this->article_content_en   = $this->article_content_id;
        $this->downloadable_content = $article_data->image_path;
        $this->downloadable_content_extra = $article_data->thumbnail;
        $this->article_status       = 1;

        return $this->db->insert('articles', $this);
    }
    
    function get_allregulation($status = '')
    {
        $params = '';
        $this->db->where('article_category', 'regulation');
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->result();
    }

    function insert_regulation($article_data)
    {
        $this->article_author       = $this->session->userdata['user_id'];
        $this->article_type         = 'document';
        $this->article_category     = 'regulation';
        $this->article_title_id     = $article_data['i_title'];
        $this->article_title_en     = $this->article_title_id;
        $this->article_excerpt      = $article_data['excerpt'];
        $this->article_content_id   = $article_data['i_desc'];
        $this->article_content_en   = $this->article_content_id;
        $this->downloadable_content = $article_data['i_regulation_file'];
        $this->article_status       = 1;

        return $this->db->insert('articles', $this);
    }

    function update_user_data($user_data)
    {
        $this->user_login           = $user_data['i_uname'];
        $this->user_email           = $user_data['i_email'];
        $this->user_displayname     = $user_data['i_dname'];

        return $this->db->update('users', $this, array('user_id' => $user_data['i_userid']));
    }

}