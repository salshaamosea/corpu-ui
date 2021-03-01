<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_user extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $pass){
        $this->db->where('email', $email);
        $user = $this->db->get('corpu_dac_user')->row();
       
        if($user !== null){
            $passTrue = password_verify($pass, $user->password);

            $role = $user->role == 0;

            if($passTrue && $role){
                $this->session->set_userdata(['user_logged' => $user]);

                return true;
            }
        }

        return false;
    }

    public function notLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    public function chackSession(){
        if($this->session->userdata('user_logged') != null) {
            return true;
        }

        return false;
    }

    public function emptyCheck($data){
        for($i = 0; $i < count($data); $i++){
            if(empty($data[$i])){
                return false;
            }  
        }
        return true;
    }
}