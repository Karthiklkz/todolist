<?php
class Task_model extends CI_Model {
    function saverecords($data){
        $this->db->insert('task',$data);
        return true;
    }

    function displayrecords(){
        $query = $this->db->get('task');
        return $query->result();
    }

    function displayrecordbyid($id){
        $query = $this->db->query("Select * from task where id = '".$id."'");
        return $query->result();
    }

    function update_records($task,$id){
        $this->db->query("update task set task = '$task' where id = '".$id."'");
    }

    function deleterecordbyid($id){
        $query = $this->db->where('id',$id);
        $this->db->delete('task');
        return true;
    }

    function statusupdatebyid($id){
        $this->db->query("update task set completed = '1' where id = '".$id."'");
    }
}
?>