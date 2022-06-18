<?php

class Mahasiswa_model extends CI_Model
{
    public function registerMahasiswa($email, $pass, $nama, $nim, $kelas, $foto_name){
        $this->db->insert("mahasiswa", [
            'email' => $email,
            'password' => $pass,
            'nim' => $nim,
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            "foto" => $foto_name
        ]);

        return true;
    }
    public function checkMahasiswa($email, $pass){
        $query = $this->db->get_where("mahasiswa", [
            "email" => $email,
            "password" => $pass
        ]);

        return $query->row();
    }   
    public function getData($email, $nim){
        $query = $this->db->get_where("mahasiswa", [
            "email" => $email,
            "nim" => $nim
        ]);

        return $query->row();
    } 
}