<?php

class User_model extends CI_Model
{
    public function insert_user($username, $password, $name, $level, $email)
    {
        $this->db->insert("user", [
            "usernama" => $username,
            "password" => $password,
            "level" => $level,
            "email" => $email,
            "name" => $name,
        ]);
    }

    public function update_user($id, $username, $password, $name, $level, $email)
    {
        $this->db->update("user", [
            "usernama" => $username,
            "password" => $password,
            "level" => $level,
            "email" => $email,
            "name" => $name,
        ], [
            "id" => $id
        ]);
    }

    public function get_user(){
        $query = $this->db->get("user");
        return $query->result();
    }

    public function get_userById($id){
        $query = $this->db->get_where("user", [
            "id" => $id
        ]);
        return $query->row();
    }

    public function delete_user($id){
        $this->db->delete("user", ["id"=>$id]);
    }
}
