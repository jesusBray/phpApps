<?php
    class autosModel extends CI_model{


        public function __construct (){
            // llamada x drivers database
            $this->load->library(['form_validation','session']);
            $this->load->database();
        }

        public function registro(){
            //insercion directa a mysql 
            $data=array(
                'placa'=> $this->input->post("placa"),
                'tipo'=> $this->input->post("tipo")
            );
            return $this->db->insert('autos',$data);
        }

        public function getAll(){
            return $this->db->query("SELECT * FROM autos;")->result();
        }


        public function getAutoById($id){ 
            return $this->db->get_where('autos',['id' => $id])->row();
        }

        public function update($id) {
            $data=array(
                'nombre'=> $this->input->post("placa"),
                'apellido'=> $this->input->post("tipo")
            );
            if($id==0){
                return $this->db->insert('autos',$data);
            }else{
                $this->db->where('id',$id);
                return $this->db->update('autos',$data);
            }    	

        }

        public function deletById($id){
            $this->db->where('id',$id);
            $this->db->delete('autos');
        }
    }
?>