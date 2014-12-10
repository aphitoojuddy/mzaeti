<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_article($id = '')
    {
        if(!empty($id)){
            $this->db->where('article_id', $id);
        }

        $query = $this->db->get('articles');
        return $query->row();
    }

    function get_member($article_id, $status = '')
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'members');
        $this->db->where("article_id", $article_id);
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->row();
    }

    function get_allmembers($status = '')
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'members');
        $this->db->order_by("article_id", "desc");
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->result();
    }

    function insert_member_logo($member_data)
    {
        $this->article_author       = $this->session->userdata['user_id'];
        $this->article_type         = 'article';
        $this->article_category     = 'members';
        $this->article_title_id     = $member_data['i_title_id'];
        $this->article_title_en     = $member_data['i_title_en'];
        $this->article_excerpt      = $member_data['excerpt'];
        $this->article_content_id   = $member_data['i_content_id'];
        $this->article_content_en   = $member_data['i_content_en'];
        $this->downloadable_content = $member_data['i_image_file'];
        $this->downloadable_content_extra = '';
        $this->article_status       = 1;

        // return $this->db->insert('articles', $this);
        $this->db->trans_start();
        $this->db->insert('articles', $this);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function edit_member_logo($member_data)
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'members');
        $this->db->where('article_id', $member_data['article_id']);

        $this->article_title_id    = $member_data['article_title_id'];
        $this->article_title_en    = $member_data['article_title_en'];
        $this->article_excerpt     = $member_data['article_excerpt'];
        $this->article_content_id  = $member_data['article_content_id'];
        $this->article_content_en  = $member_data['article_content_en'];
        $this->downloadable_content = $member_data['downloadable_content'];
        $this->downloadable_content_extra = $member_data['downloadable_content_extra'];

        return $this->db->update('articles', $this);        
    }

    function update_member($member_data)
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'members');
        $this->db->where('article_id', $member_data->article_id);

        $this->article_title_id    = $member_data->article_title_id;
        $this->article_title_en    = $member_data->article_title_en;
        $this->article_excerpt     = $member_data->article_excerpt;
        $this->article_content_id  = $member_data->article_content_id;
        $this->article_content_en  = $member_data->article_content_en;
        $this->downloadable_content = $member_data->downloadable_content;
        $this->downloadable_content_extra = $member_data->downloadable_content_extra;

        return $this->db->update('articles', $this);        
    }

    function get_overview($article_id = '', $status = '')
    {
        $this->db->where('article_type', 'page');
        $this->db->where('article_category', 'overview');

        if (!empty($article_id)) {
            $this->db->where("article_id", $article_id);
        }
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->row();
    }

    function update_overview($overview_data)
    {
        $this->db->where('article_type', 'page');
        $this->db->where('article_category', 'overview');
        $this->db->where('article_id', $overview_data['article_id']);

        $this->article_title_id    = $overview_data['i_title_id'];
        $this->article_title_en    = $overview_data['i_title_en'];
        $this->article_excerpt     = $overview_data['excerpt'];
        $this->article_content_id  = $overview_data['i_content_id'];
        $this->article_content_en  = $overview_data['i_content_en'];

        return $this->db->update('articles', $this);        
    }

    function get_news($article_id, $status = '')
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'news');
        $this->db->where("article_id", $article_id);
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->row();
    }
    
    function get_allnews($status = '')
    {
        $params = '';
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'news');
        $this->db->order_by("article_id", "desc");
        if(!empty($status)){
            $this->db->where('article_status', $status);
        }

        $query = $this->db->get('articles');
        return $query->result();
    }

    function update_news($news_data)
    {
        $this->db->where('article_type', 'article');
        $this->db->where('article_category', 'news');
        $this->db->where('article_id', $news_data['article_id']);

        $this->article_title_id    = $news_data['i_title_id'];
        $this->article_title_en    = $news_data['i_title_en'];
        $this->article_excerpt     = $news_data['excerpt'];
        $this->article_content_id  = $news_data['i_content_id'];
        $this->article_content_en  = $news_data['i_content_en'];

        return $this->db->update('articles', $this);
    }

    function insert_news($news_data)
    {
        $this->article_author       = $this->session->userdata['user_id'];
        $this->article_type         = 'article';
        $this->article_category     = 'news';
        $this->article_title_id     = $news_data['i_title_id'];
        $this->article_title_en     = $news_data['i_title_en'];
        $this->article_excerpt      = $news_data['excerpt'];
        $this->article_content_id   = $news_data['i_content_id'];
        $this->article_content_en   = $news_data['i_content_en'];
        $this->downloadable_content = '';
        $this->downloadable_content_extra = '';
        $this->article_status       = 1;

        return $this->db->insert('articles', $this);
    }
    
    function get_allgallery($status = '')
    {
        $params = '';
        $this->db->where('article_category', 'gallery');
        $this->db->order_by("article_id", "desc");
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

    function delete_article($article_id){
        return $this->db->delete('articles', array('article_id' => $article_id));   
    }
}