<?php

class Pages extends CI_Controller {

	
    
    public function create(){
        $this->load->library('form_validation');

        $data['title'] = 'Create a task'; 
     

        $this->form_validation->set_rules('task' , 'Task' , 'required');
        $this->form_validation->set_rules('description' , 'Description' , 'required');
        $this->form_validation->set_rules('status' , 'Status' , 'required');
        // $this->form_validation->set_rules('compdate' , 'Compdate' , 'required');

        if($this->form_validation->run() === False){

            $this->load->view('templates/header');
            $this->load->view('pages/create' , $data);
            $this->load->view('templates/footer');        
        }

        else{
            $this->load->model('pages_model');
            $data['task'] = $this->pages_model->create_task();
            redirect('pages/task');
        }

    }


    public function task(){
        
        $data['tasks'] = $this->pages_model->gettasks();

        $this->load->view('templates/header');
        $this->load->view('pages/view' , $data);
        $this->load->view('templates/footer'); 
    }


    public function edit(){
        $data['title'] = 'Edit a Post';
        $data['task'] = $this->pages_model->edittask();
        // $id = $task['id'];
        
        $this->load->view('templates/header');
        $this->load->view('pages/edit' , $data);
        $this->load->view('templates/footer');
    }

    public function updatetask(){
        $data['update'] = $this->pages_model->updatetask();
        redirect('pages/task');

    }

    public function deletetask($id){
        $data['task'] = $this->pages_model->deletetask($id);
        redirect('pages/task');
    }

    public function completed(){

        $data['tasks'] = $this->pages_model->completedtask();
        
        $this->load->view('templates/header');
        $this->load->view('pages/completed' , $data );
        $this->load->view('templates/footer');
    }
    
    
    
    public function pending(){
        $data['tasks'] = $this->pages_model->pendingtask();

        $this->load->view('templates/header');
        $this->load->view('pages/pending' ,$data );
        $this->load->view('templates/footer');
    }
    public function today(){
        $data['tasks'] = $this->pages_model->todaytask();

        $this->load->view('templates/header');
        $this->load->view('pages/today' , $data);
        $this->load->view('templates/footer');
    }


    public function deleteAllTask(){


        $task_id = $this->input->post('checkbox');

            // foreach($task_id as $value){
            //     echo "value : ".$value.'<br/>';
            // }
            
            
            if(!empty($this->input->post('checkbox'))) {
                
                foreach($this->input->post('checkbox') as $value){
                    echo "value : ".$value.'<br/>';
                };
                
            }
            die($task_id);

    }
}

