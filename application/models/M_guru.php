<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model{

    function __construct() {
        parent::__construct();
        
        $this->load->model('DbHelper');
    }
    
    function getSemua(){
        $sql    =   "SELECT * from guru";
                    
        return $this-> DbHelper->execQuery($sql);

    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function inputdata($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit($id)
    {
     $query = $this->db->query("SELECT * from guru where guru.id='$id'");
    return $query->row(); 
    }

     public function delete_by_kode($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }  
     public function update($where, $data)
    {
        $this->db->update('guru', $data, $where);
    }
 

}
