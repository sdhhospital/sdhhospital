<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 9/13/2019
 * Time: 5:00 PM
 */
class Crud_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function insert($table, $data){
        date_default_timezone_set('Asia/Karachi');
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        return $this->db->insert($table, $data);
    }

    public function get_all_data($table){
        return $this->db->get($table)->result();
    }

    public function get($table, $id){
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    public function update($table, $id , $data){
        $this->db->where('id', $id);
        $this->db->set($table,$data);
        return $this->db->update($table);
    }

    public function delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function getall_with_userid($table){
        return $this->db->get($table)->result();
    }

    public function get_with_userid($table, $id){
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }



}