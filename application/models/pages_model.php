<?php
    class pages_model extends CI_Model
   {
        public function __construct()
        {
            $this->load->database();
        }

        public function create_task(){
            
            $data = array (
                'task' => $this->input->post('task'),                
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'compdate' => $this->input->post('compdate')
            );



            return $this->db->insert('todolist' , $data);
        }

        public function gettasks(){
            $query = $this->db->get('todolist');
            return $query->result_array();
        }

        public function edittask(){
            
            $query = $this->db->get_where('todolist', array('id' => $_GET["id"]));
            return $query->row_array();
            
        }

        public function updatetask(){            
            $data = array (
                'id' => $this->input->post('id'),
                'task' => $this->input->post('task'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status'),
                'compdate' => $this->input->post('compdate')    
            );

            
           $this->db->where('id' , $this->input->post('id'));
           return $this->db->update('todolist' , $data);
            
        }

        public function deletetask($id){
            $this->db->where('id' , $id);
            $this->db->delete('todolist');
        }


        // phase 2

        public function completedtask(){
            $this->db->get('todolist');
            $query = $this->db->get_where('todolist', array('status' => 'Completed'));
            return $query->result_array();
        }
        public function pendingtask(){
            $this->db->get('todolist');
            $query = $this->db->get_where('todolist', array('status' => 'Pending'));
            return $query->result_array();
        }
        public function todaytask(){
            $this->db->get('todolist');
            $todaydate = date('Y-m-d');
            $query = $this->db->get_where('todolist', array('compdate' => $todaydate));
            return $query->result_array();
        }


   

   }    



