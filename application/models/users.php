<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
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

    function insert_articles()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('articles', $this);
    }

    function update_articles()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('articles', $this, array('id' => $_POST['id']));
    }

}