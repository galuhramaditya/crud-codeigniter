<?php

class User_model extends CI_Model
{

        public function get_data()
        {
                return $this->db->get('user')->result();
        }

        public function insert_data($data)
        {
                $this->db->insert('user', $data);
        }

        public function update_data($data, $id)
        {
                $this->db->update('user', $data, array('id' => $id));
        }

        public function delete_data($id)
        {
                $this->db->delete('user', array('id' => $id));
         }
}
