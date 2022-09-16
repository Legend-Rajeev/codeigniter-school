<?php
class Admin_Model extends MY_Model{
   
    public function check_admin($username, $password){
        $this->db->select("id,status");
        $this->db->from("admin_user");
        $this->db->where(array("username"=>$username, "password"=>$password));
        $result = $this->db->get()->result();
        return $result;
    }

    public function add_data($dbname,$data){
        $q = $this->db->insert($dbname, $data);
        return $q;

    }

    public function update_data($table, $data, $id){
        $this->db->where("cat_id", $id);
        $q = $this->db->update($table, $data);
        print_r($q);
    }

    public function get_category(){
        $this->db->select("cat_id, category_name, status, added_on");
        $this->db->from("category");
        $q = $this->db->get()->result();
        return $q;
    }
    public function get_data_from_id($table,$id){
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where("cat_id", $id);
        $q = $this->db->get()->result();
        return $q;
    }
}
?>