<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserRole()
    {
        $query = "SELECT `user` . *, `user_role` . `role`
                 FROM `user` join `user_role` 
                 ON `user` . `role_id` = `user_role` . `id`";
        return $this->db->query($query)->result_array();
    }
}
