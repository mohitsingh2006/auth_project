<?php
class Auth_model extends CI_Model{

    /* This function will save a user record in database */
    public function create($formArray){
        $this->db->insert('users',$formArray);
    }

    /* This method will return a row array based email entered*/
    public function checkUser($email) {
        $this->db->where('email',$email);
        return $row = $this->db->get('users')->row_array();
    }

    /* Check user authorization */
    function authorized() {
        $user = $this->session->userdata('user');
        if(!empty($user)){
            return true;
        } else {
            return false;
        }
    }
}
?>