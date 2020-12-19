<?php

class StudentsModel extends CI_model {

    public function get_data($table) {
        return $this->db->get($table);
    }

    public function insertData($data, $table) {
        $this->db->insert($table, $data);
    }

    public function updateData($table, $data, $where) {
        $this->db->update($table, $data, $where);
    }

    public function deleteData($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }


}

?>