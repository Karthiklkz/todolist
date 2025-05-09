<?php 
/**
 * @property CI_Input $input
 * @property Task_model $task_model
 */
class Tasks extends CI_Controller {
 
       public function __construct()
       {
                parent::__construct();
                $this->load->database();
                $this->load->model('task_model');
                $this->load->helper('url');             
        }
        
        public function savedata(){
            $this->load->view('insert');
            if($this->input->post('save')){
                $data['task']=$this->input->post('task');
                $response = $this->task_model->saverecords($data);
                if($response == true){
                    echo 'Insert';
                }else{
                    echo 'Not insert';
                }
            }
        }

        public function displaydata(){
            $result['data']=$this->task_model->displayrecords();
            $this->load->view('display_records',$result);
        }

        public function updateddata(){
           $id = $this->input->get('id');
           $result['data'] = $this->task_model->displayrecordbyid($id); 
           $this->load->view('update_records',$result);
           if($this->input->post('update')){
            $task = $this->input->post('task');
            $this->task_model->update_records($task,$id);
            echo 'Updated';
           }
        }

        public function deleteddata(){
            $id = $this->input->get('id');
            $response = $this->task_model->deleterecordbyid($id);
            if($response == true){
                    echo 'Delete';
                }else{
                    echo 'Not delete';
                }
        }
        
        public function statusdata(){
            $id = $this->input->get('id');
           $response = $this->task_model->statusupdatebyid($id);
        }
        
}
?>