<?php
    class datosModel extends CI_model{


        public function __construct (){
            // llamada x drivers database
            $this->load->library(['form_validation','session']);
            $this->load->database();
        }

        //put nombre	apellido	ci	telefono	email	password
        public function registro($nombre, $apellido, $ci, $telefono, $email, $password){
            //insercion directa a mysql 
            return $this->db->insert("usuarios",["nombre"=> $nombre,"apellido"=> $apellido, "ci"=> $ci,"telefono"=> $telefono, "email" => $email, "password"=> $password]);
        }

        public function getAll(){
            return $this->db->query("SELECT * FROM usuarios;")->result();
        }

        public function loginBy($email, $password){ 
            return $this->db->get_where('usuarios',['email' => $email , 'password' => $password])->row();
        }

        public function getUserById($id){ 
            return $this->db->get_where('usuarios',['id' => $id])->row();
        }

        public function update($id) {
            $data=array(
                'nombre'=> $this->input->post("nombre"),
                'apellido'=> $this->input->post("apellido"),
                'ci'=>$this->input->post("ci"),
                'telefono'=>$this->input->post("telefono"),
                'email'=>$this->input->post("email"),
                'password'=>$this->input->post("password")
            );
            if($id==0){
                return $this->db->insert('usuarios',$data);
            }else{
                $this->db->where('id',$id);
                return $this->db->update('usuarios',$data);
            }    	

        }

        public function deletById($id){
            $this->db->where('id',$id);
            $this->db->delete('usuarios');
        }
    }
?>