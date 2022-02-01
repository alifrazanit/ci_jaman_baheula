<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdlt_utility extends CI_Model {

    public function __construct() {
        parent::__construct();

	}

    public function login($usr,$pass,$table){
        $this->db->select('*');
        $this->db->where('username', $usr);
        $this->db->where('password', md5($pass));

        
        $query = $this->db->get($table); 
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function getthreejoin($field,$table1,$table2,$table3,$key1,$key2,$key3,$key4){
        $this->db->select($field);    
        $this->db->from($table1);
        $this->db->join($table2, $key1.'='.$key2);
        $this->db->join($table3, $key3.'='.$key4);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }
    public function getthreejoinWhere($var){
        $this->db->select('*');    
        $this->db->from('admin');
        $this->db->join('DetDept', 'DetDept.NIK=admin.NIK');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }
    
    public function getdualjoin($field,$table1,$table2,$key1,$key2){
        $this->db->select($field);    
        $this->db->from($table1);
        $this->db->join($table2, $key1.'='.$key2);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function checkcard($card){
        $tbl = 'DetDept';
        $field = '*';
        $key = 'card';
        $args = $card;
        $dat = $this->getData($tbl,$field,$key,$args);    
        if(!isset($dat)){
           $this->checksession->logout();
           redirect('login');
        }
    }

    public function getData($tbl,$field,$key,$args)
    {   
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->where($key,$args);
        $query = $this->db->get();  

        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function getDAll($tbl,$field,$args,$order)
    {   
        $this->db->order_by($order, $args);
        $this->db->select($field);
        $this->db->from($tbl);

        $query = $this->db->get();  
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function find($tbl,$field,$orderby)
    {   
        $this->db->order_by($field, $orderby);
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->limit(1);

        $query = $this->db->get();  
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function insertTable($tbl,$data)
    {   
        $this->db->insert($tbl,$data);
    }
    
    public function updateTable($tbl,$key,$arg,$data)
    {   
        $this->db->where($key,$arg);
        $this->db->update($tbl, $data);     
    }

    public function deleteTable($tbl,$key,$arg)
    {   
        $this->db->where($key,$arg)
                ->delete($tbl);
    }

}




